/* assets/js/main.js */
/* Mavros Agency */
/* White tech-minimal system interactions */

(function () {
  "use strict";

  const doc = document;
  const html = doc.documentElement;
  const body = doc.body;

  const qs = (selector, scope = doc) => scope.querySelector(selector);
  const qsa = (selector, scope = doc) => Array.from(scope.querySelectorAll(selector));

  const prefersReducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* =========================================================
     SMALL HELPERS
  ========================================================= */

  function clamp(value, min, max) {
    return Math.min(Math.max(value, min), max);
  }

  function isValidUrl(url) {
    if (!url || typeof url !== "string") return false;

    try {
      const parsed = new URL(url, window.location.origin);
      return Boolean(parsed.href);
    } catch (error) {
      return false;
    }
  }

  function safeJsonParse(value) {
    if (!value) return {};

    try {
      return JSON.parse(value);
    } catch (error) {
      return {};
    }
  }

  function setBodyLock(isLocked) {
    body.classList.toggle("mv-modal-open", isLocked);
    html.classList.toggle("mv-modal-open", isLocked);
  }

  function getHeaderHeight() {
    const header = qs("[data-mv-header], .mv-header");
    return header ? header.offsetHeight : 0;
  }

  function scrollToTarget(target) {
    if (!target) return;

    const headerHeight = getHeaderHeight();
    const targetTop = target.getBoundingClientRect().top + window.scrollY - headerHeight + 2;

    window.scrollTo({
      top: Math.max(targetTop, 0),
      behavior: prefersReducedMotion ? "auto" : "smooth"
    });
  }

  /* =========================================================
     HEADER
     Works with the header.php that will be delivered next.
  ========================================================= */

  function initHeader() {
    const header = qs("[data-mv-header], .mv-header");

    if (!header) return;

    function updateHeaderState() {
      header.classList.toggle("is-scrolled", window.scrollY > 18);
    }

    updateHeaderState();

    window.addEventListener("scroll", updateHeaderState, { passive: true });
  }

  function initDrawer() {
    const toggle = qs("[data-drawer-toggle], [data-mv-drawer-toggle]");
    const drawer = qs("[data-mv-drawer], .mv-drawer");
    const backdrop = qs("[data-drawer-backdrop], [data-mv-drawer-backdrop], .mv-drawer-backdrop");
    const drawerLinks = qsa("[data-drawer-link], .mv-drawer a");

    if (!toggle || !drawer || !backdrop) return;

    let closeTimer = null;

    function openDrawer() {
      window.clearTimeout(closeTimer);

      drawer.hidden = false;
      backdrop.hidden = false;

      requestAnimationFrame(() => {
        body.classList.add("mv-drawer-open");
        toggle.setAttribute("aria-expanded", "true");
        toggle.setAttribute("aria-label", "Zatvori navigaciju");
      });
    }

    function closeDrawer() {
      body.classList.remove("mv-drawer-open");
      toggle.setAttribute("aria-expanded", "false");
      toggle.setAttribute("aria-label", "Otvori navigaciju");

      closeTimer = window.setTimeout(() => {
        drawer.hidden = true;
        backdrop.hidden = true;
      }, 330);
    }

    function toggleDrawer() {
      if (body.classList.contains("mv-drawer-open")) {
        closeDrawer();
      } else {
        openDrawer();
      }
    }

    toggle.addEventListener("click", toggleDrawer);
    backdrop.addEventListener("click", closeDrawer);

    drawerLinks.forEach(link => {
      link.addEventListener("click", () => {
        closeDrawer();
      });
    });

    doc.addEventListener("keydown", event => {
      if (event.key !== "Escape") return;
      if (!body.classList.contains("mv-drawer-open")) return;

      closeDrawer();
      toggle.focus();
    });
  }

  function initActiveNavigation() {
    const navLinks = qsa("[data-section-link], [data-mv-section-link]");

    if (!navLinks.length) return;

    const validLinks = navLinks.filter(link => {
      const sectionId = link.dataset.sectionLink || link.dataset.mvSectionLink;
      return sectionId && doc.getElementById(sectionId);
    });

    if (!validLinks.length) return;

    const sections = validLinks
      .map(link => {
        const sectionId = link.dataset.sectionLink || link.dataset.mvSectionLink;
        return doc.getElementById(sectionId);
      })
      .filter(Boolean);

    const observer = new IntersectionObserver(
      entries => {
        const visible = entries
          .filter(entry => entry.isIntersecting)
          .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];

        if (!visible) return;

        const activeId = visible.target.id;

        navLinks.forEach(link => {
          const sectionId = link.dataset.sectionLink || link.dataset.mvSectionLink;
          link.classList.toggle("is-active", sectionId === activeId);
        });
      },
      {
        threshold: [0.18, 0.32, 0.52],
        rootMargin: "-18% 0px -62% 0px"
      }
    );

    sections.forEach(section => observer.observe(section));
  }

  function initSmoothScroll() {
    const links = qsa('a[href^="#"], a[href*="/#"]');

    if (!links.length) return;

    links.forEach(link => {
      link.addEventListener("click", event => {
        if (!link.href) return;

        const targetUrl = new URL(link.href, window.location.origin);
        const currentUrl = new URL(window.location.href);

        if (targetUrl.origin !== currentUrl.origin) return;
        if (targetUrl.pathname.replace(/\/$/, "") !== currentUrl.pathname.replace(/\/$/, "")) return;
        if (!targetUrl.hash) return;

        const target = qs(targetUrl.hash);

        if (!target) return;

        event.preventDefault();

        if (body.classList.contains("mv-drawer-open")) {
          body.classList.remove("mv-drawer-open");
        }

        scrollToTarget(target);

        window.history.pushState(null, "", targetUrl.hash);
      });
    });
  }

  /* =========================================================
     REVEAL ANIMATIONS
  ========================================================= */

  function initReveal() {
    const revealItems = qsa(".mv-reveal, .mv-split");

    if (!revealItems.length) return;

    if (prefersReducedMotion) {
      revealItems.forEach(item => item.classList.add("is-visible"));
      return;
    }

    const observer = new IntersectionObserver(
      entries => {
        entries.forEach(entry => {
          if (!entry.isIntersecting) return;

          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        });
      },
      {
        threshold: 0.12,
        rootMargin: "0px 0px -8% 0px"
      }
    );

    revealItems.forEach(item => observer.observe(item));
  }

  function initSplitText() {
    const splitItems = qsa(".mv-split");

    if (!splitItems.length) return;

    splitItems.forEach(item => {
      if (item.dataset.splitReady === "true") return;

      const original = item.textContent.trim();

      if (!original) return;

      const words = original.split(/\s+/);

      item.innerHTML = words
        .map((word, index) => {
          const safeWord = word
            .replace(/&/g, "&amp;")
            .replace(/</g, "&lt;")
            .replace(/>/g, "&gt;")
            .replace(/"/g, "&quot;");

          return `<span class="mv-word"><span style="transition-delay:${index * 52}ms">${safeWord}</span></span>`;
        })
        .join(" ");

      item.dataset.splitReady = "true";
    });
  }

  function initTickTitles() {
    const titles = qsa(".mv-tick-title");

    if (!titles.length) return;

    function splitTitle(title) {
      if (title.dataset.tickReady === "true") return;

      const original = title.textContent.trim();

      if (!original) return;

      const words = original.split(/\s+/);

      title.innerHTML = words
        .map(word => {
          const chars = Array.from(word)
            .map(char => {
              const safeChar = char
                .replace(/&/g, "&amp;")
                .replace(/</g, "&lt;")
                .replace(/>/g, "&gt;")
                .replace(/"/g, "&quot;");

              return `<span class="mv-tick-char">${safeChar}</span>`;
            })
            .join("");

          return `<span class="mv-tick-word">${chars}</span>`;
        })
        .join(`<span class="mv-tick-char" data-space="true">&nbsp;</span>`);

      title.classList.add("is-tick-ready");
      title.dataset.tickReady = "true";
    }

    function runTick(title) {
      if (title.dataset.ticked === "true") return;

      const chars = qsa(".mv-tick-char", title);
      title.dataset.ticked = "true";

      if (prefersReducedMotion) {
        title.classList.add("is-ticking");
        chars.forEach(char => {
          char.style.opacity = "1";
          char.style.transform = "none";
        });
        return;
      }

      chars.forEach((char, index) => {
        const delay = index * 14;

        window.setTimeout(() => {
          char.style.opacity = "1";
          char.style.transform = "translateY(0)";
        }, delay);
      });

      title.classList.add("is-ticking");
    }

    titles.forEach(splitTitle);

    const observer = new IntersectionObserver(
      entries => {
        entries.forEach(entry => {
          if (!entry.isIntersecting) return;

          runTick(entry.target);
          observer.unobserve(entry.target);
        });
      },
      {
        threshold: 0.32,
        rootMargin: "0px 0px -14% 0px"
      }
    );

    titles.forEach(title => observer.observe(title));
  }

  function initMagneticButtons() {
    const buttons = qsa(".mv-magnetic");

    if (!buttons.length || prefersReducedMotion) return;

    buttons.forEach(button => {
      button.addEventListener("mousemove", event => {
        const rect = button.getBoundingClientRect();
        const x = event.clientX - rect.left - rect.width / 2;
        const y = event.clientY - rect.top - rect.height / 2;

        button.style.transform = `translate(${x * 0.08}px, ${y * 0.12}px)`;
      });

      button.addEventListener("mouseleave", () => {
        button.style.transform = "";
      });

      button.addEventListener("blur", () => {
        button.style.transform = "";
      });
    });
  }

  /* =========================================================
     INDUSTRY TABS
  ========================================================= */

  function initIndustryTabs() {
    const wrappers = qsa("[data-industry-tabs]");

    if (!wrappers.length) return;

    wrappers.forEach(wrapper => {
      const triggers = qsa("[data-industry-trigger]", wrapper);
      const panels = qsa("[data-industry-panel]", wrapper);

      if (!triggers.length || !panels.length) return;

      function activateIndustry(key) {
        triggers.forEach(trigger => {
          const isActive = trigger.dataset.industryTrigger === key;

          trigger.classList.toggle("is-active", isActive);
          trigger.setAttribute("aria-selected", isActive ? "true" : "false");
        });

        panels.forEach(panel => {
          const isActive = panel.dataset.industryPanel === key;

          panel.classList.toggle("is-active", isActive);

          if (isActive && !prefersReducedMotion) {
            panel.animate(
              [
                { opacity: 0, transform: "translateY(14px)" },
                { opacity: 1, transform: "translateY(0)" }
              ],
              {
                duration: 320,
                easing: "cubic-bezier(0.16, 1, 0.3, 1)",
                fill: "both"
              }
            );
          }
        });
      }

      triggers.forEach(trigger => {
        trigger.addEventListener("click", () => {
          activateIndustry(trigger.dataset.industryTrigger);
        });
      });
    });
  }

  /* =========================================================
     DEVICE SHOWCASE
     Scroll + click controlled laptop and phone preview.
  ========================================================= */

  function initDeviceShowcase() {
    const showcase = qs("[data-device-showcase]");
    const stages = qsa("[data-device-stage]", showcase || doc);
    const laptopImage = qs("[data-device-laptop]", showcase || doc);
    const phoneImage = qs("[data-device-phone]", showcase || doc);

    if (!showcase || !stages.length || !laptopImage || !phoneImage) return;

    let activeIndex = 0;
    let ticking = false;

    function setImage(image, src) {
      if (!image || !isValidUrl(src)) return;
      if (image.src === new URL(src, window.location.origin).href) return;

      image.style.opacity = "0";

      window.setTimeout(() => {
        image.src = src;
        image.style.opacity = "1";
      }, 130);
    }

    function activateStage(index) {
      const nextIndex = clamp(index, 0, stages.length - 1);

      if (nextIndex === activeIndex && showcase.classList.contains("is-device-active")) return;

      activeIndex = nextIndex;

      stages.forEach((stage, currentIndex) => {
        stage.classList.toggle("is-active", currentIndex === activeIndex);
      });

      const current = stages[activeIndex];

      if (!current) return;

      setImage(laptopImage, current.dataset.laptop);
      setImage(phoneImage, current.dataset.phone);

      showcase.classList.add("is-device-active");
    }

    function updateByScroll() {
      ticking = false;

      const rect = showcase.getBoundingClientRect();
      const viewportHeight = window.innerHeight || doc.documentElement.clientHeight;
      const total = rect.height - viewportHeight * 0.45;

      if (total <= 0) return;

      const progress = clamp((viewportHeight * 0.55 - rect.top) / total, 0, 1);
      const index = Math.round(progress * (stages.length - 1));

      activateStage(index);

      const laptopMove = (1 - progress) * 48;
      const phoneMove = (1 - progress) * 86;
      const phoneRotate = 3 + progress * -5;

      if (!prefersReducedMotion) {
        const laptop = qs(".mv-device--laptop", showcase);
        const phone = qs(".mv-device--phone", showcase);

        if (laptop) {
          laptop.style.transform = `translateY(${laptopMove}px) scale(${0.96 + progress * 0.04})`;
        }

        if (phone) {
          phone.style.transform = `translateY(${phoneMove}px) rotate(${phoneRotate}deg) scale(${0.92 + progress * 0.08})`;
        }
      }
    }

    function requestScrollUpdate() {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(updateByScroll);
    }

    stages.forEach((stage, index) => {
      stage.addEventListener("click", () => {
        activateStage(index);
      });
    });

    const observer = new IntersectionObserver(
      entries => {
        entries.forEach(entry => {
          showcase.classList.toggle("is-visible", entry.isIntersecting);

          if (entry.isIntersecting) {
            requestScrollUpdate();
          }
        });
      },
      {
        threshold: 0.18
      }
    );

    observer.observe(showcase);

    window.addEventListener("scroll", requestScrollUpdate, { passive: true });
    window.addEventListener("resize", requestScrollUpdate);

    activateStage(0);
  }

  /* =========================================================
     PROJECT FILTERS
  ========================================================= */

 function initProjectFilters() {
  const filters = qsa("[data-project-filter]");
  const cards = qsa("[data-project-card]");
  const loadWrap = qs("[data-project-load-wrap]");
  const loadButton = qs("[data-project-load-more]");
  const countText = qs("[data-project-count]");

  if (!cards.length) return;

  const initialLimit = 6;
  const increment = 6;

  let activeFilter = "all";
  let visibleLimit = initialLimit;

  function getMatchingCards() {
    return cards.filter(card => {
      const category = card.dataset.projectCategory;
      return activeFilter === "all" || category === activeFilter;
    });
  }

  function updateCounter(visibleCount, totalCount) {
    if (!countText) return;

    if (totalCount === 0) {
      countText.textContent = "Nema radova u ovoj kategoriji.";
      return;
    }

    if (totalCount === 1) {
      countText.textContent = "Prikazan 1 rad.";
      return;
    }

    countText.textContent = `Prikazano ${visibleCount} od ${totalCount} radova.`;
  }

  function updateLoadButton(visibleCount, totalCount) {
    if (!loadWrap || !loadButton) return;

    const shouldHide = totalCount <= visibleLimit;

    loadWrap.classList.toggle("is-hidden", shouldHide);

    if (!shouldHide) {
      const remaining = totalCount - visibleCount;
      const nextAmount = Math.min(increment, remaining);

      loadButton.innerHTML = `Učitaj još ${nextAmount} <span aria-hidden="true">↓</span>`;
    }
  }

  function animateVisibleCards(visibleCards) {
    if (prefersReducedMotion) return;

    visibleCards.forEach((card, index) => {
      card.animate(
        [
          { opacity: 0, transform: "translateY(16px) scale(0.985)" },
          { opacity: 1, transform: "translateY(0) scale(1)" }
        ],
        {
          duration: 320,
          delay: Math.min(index * 26, 180),
          easing: "cubic-bezier(0.16, 1, 0.3, 1)",
          fill: "both"
        }
      );
    });
  }

  function renderProjects(shouldAnimate = true) {
    const matchingCards = getMatchingCards();
    const totalCount = matchingCards.length;
    const visibleCards = matchingCards.slice(0, visibleLimit);

    cards.forEach(card => {
      card.classList.add("is-hidden");
      card.classList.add("is-load-hidden");
    });

    visibleCards.forEach(card => {
      card.classList.remove("is-hidden");
      card.classList.remove("is-load-hidden");
    });

    if (shouldAnimate) {
      animateVisibleCards(visibleCards);
    }

    updateCounter(visibleCards.length, totalCount);
    updateLoadButton(visibleCards.length, totalCount);
  }

  if (filters.length) {
    filters.forEach(filter => {
      filter.addEventListener("click", () => {
        activeFilter = filter.dataset.projectFilter || "all";
        visibleLimit = initialLimit;

        filters.forEach(item => item.classList.remove("is-active"));
        filter.classList.add("is-active");

        renderProjects(true);
      });
    });
  }

  if (loadButton) {
    loadButton.addEventListener("click", () => {
      visibleLimit += increment;
      renderProjects(true);
    });
  }

  renderProjects(false);
}

  /* =========================================================
     PROJECT MODAL
  ========================================================= */

  function initProjectModal() {
    const modal = qs("[data-project-modal]");
    const cards = qsa("[data-project-card]");

    if (!modal || !cards.length) return;

    const mainImage = qs("[data-modal-main-image]", modal);
    const category = qs("[data-modal-category]", modal);
    const year = qs("[data-modal-year]", modal);
    const location = qs("[data-modal-location]", modal);
    const title = qs("[data-modal-title]", modal);
    const subtitle = qs("[data-modal-subtitle]", modal);
    const problem = qs("[data-modal-problem]", modal);
    const solution = qs("[data-modal-solution]", modal);
    const tagsWrap = qs("[data-modal-tags]", modal);
    const thumbsWrap = qs("[data-modal-thumbs]", modal);
    const behanceLink = qs("[data-modal-behance]", modal);
    const ctaLink = qs("[data-modal-cta]", modal);
    const closeItems = qsa("[data-modal-close]", modal);

    let lastFocused = null;

    function getProjectFromCard(card) {
      return safeJsonParse(card.dataset.project || "{}");
    }

    function setMainImage(src, alt) {
      if (!mainImage || !isValidUrl(src)) return;

      mainImage.style.opacity = "0";

      window.setTimeout(() => {
        mainImage.src = src;
        mainImage.alt = alt || "";
        mainImage.style.opacity = "1";
      }, 120);
    }

    function buildTags(tags) {
      if (!tagsWrap) return;

      tagsWrap.innerHTML = "";

      if (!Array.isArray(tags) || !tags.length) return;

      tags.forEach(tag => {
        const item = doc.createElement("span");
        item.textContent = tag;
        tagsWrap.appendChild(item);
      });
    }

    function buildThumbs(project) {
      if (!thumbsWrap) return;

      thumbsWrap.innerHTML = "";

      const images = Array.isArray(project.images) && project.images.length
        ? project.images
        : [project.cover].filter(Boolean);

      images.forEach((src, index) => {
        if (!isValidUrl(src)) return;

        const button = doc.createElement("button");
        const img = doc.createElement("img");

        button.type = "button";
        button.className = index === 0 ? "is-active" : "";
        button.setAttribute("aria-label", `Prikaži sliku ${index + 1}`);

        img.src = src;
        img.alt = `${project.title || "Projekt"} slika ${index + 1}`;
        img.loading = "lazy";
        img.decoding = "async";

        button.appendChild(img);

        button.addEventListener("click", () => {
          qsa("button", thumbsWrap).forEach(item => item.classList.remove("is-active"));
          button.classList.add("is-active");
          setMainImage(src, img.alt);
        });

        thumbsWrap.appendChild(button);
      });
    }

    function fillContactIntent(projectTitle) {
      if (!projectTitle) return;

      const select = qs("#mv-type");
      const message = qs("#mv-message");

      if (select) {
        Array.from(select.options).forEach(option => {
          if (option.value === "Nova web stranica") {
            option.selected = true;
          }
        });
      }

      if (message && !message.value.trim()) {
        message.value = `Zanima me projekt sličan: ${projectTitle}.`;
      }
    }

    function openModal(project, trigger) {
      if (!project || !project.title) return;

      lastFocused = trigger || doc.activeElement;

      if (category) category.textContent = project.category_label || "Projekt";
      if (year) year.textContent = project.year || "";
      if (location) location.textContent = project.location || "";
      if (title) title.textContent = project.title || "Projekt";
      if (subtitle) subtitle.textContent = project.subtitle || "";
      if (problem) problem.textContent = project.problem || "";
      if (solution) solution.textContent = project.solution || "";

      setMainImage(project.cover || "", project.title || "");
      buildTags(project.tags || []);
      buildThumbs(project);

      if (behanceLink) {
        if (project.behance && isValidUrl(project.behance)) {
          behanceLink.hidden = false;
          behanceLink.href = project.behance;
        } else {
          behanceLink.hidden = true;
          behanceLink.href = "#";
        }
      }

      if (ctaLink) {
        ctaLink.href = "#kontakt";
        ctaLink.dataset.projectTitle = project.title;
      }

      modal.classList.add("is-open");
      modal.setAttribute("aria-hidden", "false");
      setBodyLock(true);

      const closeButton = qs(".mv-project-modal__close", modal);

      if (closeButton) {
        window.setTimeout(() => closeButton.focus(), 60);
      }
    }

    function closeModal() {
      modal.classList.remove("is-open");
      modal.setAttribute("aria-hidden", "true");
      setBodyLock(false);

      if (lastFocused && typeof lastFocused.focus === "function") {
        lastFocused.focus();
      }
    }

    cards.forEach(card => {
      const button = qs(".mv-project-card__button", card);

      if (!button) return;

      button.addEventListener("click", () => {
        const project = getProjectFromCard(card);
        openModal(project, button);
      });
    });

    closeItems.forEach(item => {
      item.addEventListener("click", closeModal);
    });

    if (ctaLink) {
      ctaLink.addEventListener("click", () => {
        const projectTitle = ctaLink.dataset.projectTitle;
        closeModal();

        window.setTimeout(() => {
          const target = qs("#kontakt");
          scrollToTarget(target);
          fillContactIntent(projectTitle);
        }, 160);
      });
    }

    modal.addEventListener("click", event => {
      const dialog = qs(".mv-project-modal__dialog", modal);

      if (!dialog) return;

      if (modal.classList.contains("is-open") && !dialog.contains(event.target)) {
        closeModal();
      }
    });

    doc.addEventListener("keydown", event => {
      if (event.key !== "Escape") return;
      if (!modal.classList.contains("is-open")) return;

      closeModal();
    });
  }

  /* =========================================================
     FAQ
  ========================================================= */

  function initFaq() {
    const faq = qs("[data-faq]");

    if (!faq) return;

    const items = qsa(".mv-faq__item", faq);

    if (!items.length) return;

    items.forEach(item => {
      const button = qs("button", item);

      if (!button) return;

      button.addEventListener("click", () => {
        const isOpen = item.classList.contains("is-open");

        items.forEach(otherItem => {
          const otherButton = qs("button", otherItem);

          otherItem.classList.remove("is-open");

          if (otherButton) {
            otherButton.setAttribute("aria-expanded", "false");
          }
        });

        if (!isOpen) {
          item.classList.add("is-open");
          button.setAttribute("aria-expanded", "true");
        }
      });
    });
  }

  /* =========================================================
     CONTACT INTENTS
     Industry buttons can prefill the contact form softly.
  ========================================================= */

 function initContactIntents() {
  const intentLinks = qsa("[data-contact-intent]");

  if (!intentLinks.length) return;

  intentLinks.forEach(link => {
    link.addEventListener("click", () => {
      const intent = link.dataset.contactIntent || "";

      const homeSelect = qs("#mv-type");
      const homeMessage = qs("#mv-message");

      const pricingSelect = qs("#pricing-package");
      const pricingMessage = qs("#pricing-message");

      if (homeSelect) {
        Array.from(homeSelect.options).forEach(option => {
          if (option.value === "Nova web stranica") {
            option.selected = true;
          }
        });
      }

      if (homeMessage && !homeMessage.value.trim() && intent) {
        homeMessage.value = `${intent}. Ukratko: `;
        window.setTimeout(() => homeMessage.focus(), 520);
      }

      if (pricingSelect && intent) {
        Array.from(pricingSelect.options).forEach(option => {
          const normalizedOption = option.textContent.trim().toLowerCase();
          const normalizedIntent = intent.trim().toLowerCase();

          if (
            normalizedOption.includes(normalizedIntent.replace("želim ", "")) ||
            normalizedOption.includes(normalizedIntent)
          ) {
            option.selected = true;
          }
        });
      }

      if (pricingMessage && !pricingMessage.value.trim() && intent) {
        pricingMessage.value = `${intent}. Ukratko: `;
        window.setTimeout(() => pricingMessage.focus(), 520);
      }
    });
  });
}

  /* =========================================================
     FORM
     Formspree submit, honeypot is handled by hidden field in PHP.
  ========================================================= */

  function initForm() {
    const form = qs("[data-mv-form]");

    if (!form) return;

    const button = qs(".mv-form__submit", form);
    const note = qs("[data-form-note]", form);
    const honeypot = qs('input[name="_gotcha"]', form);

    if (!button) return;

    form.addEventListener("submit", async event => {
      event.preventDefault();

      if (honeypot && honeypot.value) return;

      const originalText = button.innerHTML;

      button.disabled = true;
      button.innerHTML = "Šaljem...";

      try {
        const response = await fetch(form.action, {
          method: "POST",
          body: new FormData(form),
          headers: {
            Accept: "application/json"
          }
        });

        if (!response.ok) {
          throw new Error("Form submission failed");
        }

        button.innerHTML = "Poruka poslana";

        if (note) {
          note.textContent = "Hvala. Odgovor stiže što prije, najčešće unutar 24 sata.";
        }

        form.reset();

        if (navigator.vibrate) {
          navigator.vibrate(70);
        }

        window.setTimeout(() => {
          button.disabled = false;
          button.innerHTML = originalText;
        }, 3600);
      } catch (error) {
        button.disabled = false;
        button.innerHTML = originalText;

        if (note) {
          note.textContent = "Forma trenutno nije prošla. Pošalji poruku direktno na hello@mavrosagency.com ili WhatsApp.";
        }
      }
    });
  }

  /* =========================================================
     LIGHT SCROLL PROGRESS
     Adds a CSS variable for future micro-interactions.
  ========================================================= */

  function initScrollProgress() {
    const page = qs("[data-mv-page], .mv-page");

    if (!page) return;

    let ticking = false;

    function updateProgress() {
      ticking = false;

      const scrollTop = window.scrollY || doc.documentElement.scrollTop || 0;
      const scrollHeight = doc.documentElement.scrollHeight - window.innerHeight;
      const progress = scrollHeight > 0 ? clamp(scrollTop / scrollHeight, 0, 1) : 0;

      page.style.setProperty("--mv-scroll-progress", progress.toFixed(4));
    }

    function requestUpdate() {
      if (ticking) return;

      ticking = true;
      requestAnimationFrame(updateProgress);
    }

    updateProgress();

    window.addEventListener("scroll", requestUpdate, { passive: true });
    window.addEventListener("resize", requestUpdate);
  }

  /* =========================================================
     ACCESSIBILITY AND QUALITY
  ========================================================= */

  function initExternalLinks() {
    const links = qsa('a[target="_blank"]');

    links.forEach(link => {
      const rel = link.getAttribute("rel") || "";
      const relParts = new Set(rel.split(/\s+/).filter(Boolean));

      relParts.add("noopener");
      relParts.add("noreferrer");

      link.setAttribute("rel", Array.from(relParts).join(" "));
    });
  }

  function initKeyboardFocusClass() {
    function handleFirstTab(event) {
      if (event.key !== "Tab") return;

      body.classList.add("is-keyboard-user");
      window.removeEventListener("keydown", handleFirstTab);
    }

    window.addEventListener("keydown", handleFirstTab);
  }

  function initLazyImageDecode() {
    const images = qsa("img");

    images.forEach(img => {
      if (!img.hasAttribute("decoding")) {
        img.setAttribute("decoding", "async");
      }

      if (!img.hasAttribute("loading") && !img.closest(".mv-hero")) {
        img.setAttribute("loading", "lazy");
      }
    });
  }

  /* =========================================================
     INIT
  ========================================================= */

  function init() {
    initSplitText();
    initTickTitles();

    initHeader();
    initDrawer();
    initActiveNavigation();
    initSmoothScroll();

    initReveal();
    initMagneticButtons();

    initIndustryTabs();
    initDeviceShowcase();

    initProjectFilters();
    initProjectModal();

    initFaq();
    initContactIntents();
    initForm();

    initScrollProgress();
    initExternalLinks();
    initKeyboardFocusClass();
    initLazyImageDecode();
  }

  if (doc.readyState === "loading") {
    doc.addEventListener("DOMContentLoaded", init);
  } else {
    init();
  }
})();