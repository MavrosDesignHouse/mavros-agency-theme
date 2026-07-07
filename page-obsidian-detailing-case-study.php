<?php

/**
 * Template Name: Obsidian Detailing Case Study
 * Template Post Type: page
 *
 * Premium portfolio case study page for Mavros Agency.
 * Upload this file into your active WordPress theme root.
 * Create a new WordPress page and select this template.
 */

if (!defined('ABSPATH')) {
  exit;
}

get_header();
?>


<!-- SFTP TEST ANA -->



<style>
  /* =========================================================
   OBSIDIAN DETAILING CASE STUDY — MAVROS AGENCY TEMPLATE
   All classes are prefixed with odc- to avoid theme conflicts.
   ========================================================= */

  :root {
    --odc-black: #050505;
    --odc-base: #0A0A0A;
    --odc-surface: #111111;
    --odc-surface-2: #141414;
    --odc-elevated: #1C1C1C;
    --odc-border: #1E1E1E;
    --odc-border-2: #2A2A2A;
    --odc-white: #F0EDE8;
    --odc-gray: #A0A0A0;
    --odc-muted: #585858;
    --odc-blue: #1A6EFF;
    --odc-blue-2: #3D87FF;
    --odc-gold: #C9A84C;
    --odc-green: #C6FF00;
    --odc-max: 1200px;
    --odc-pad: clamp(24px, 7vw, 120px);
  }

  .site-header,
  .site-footer {
    display: none !important;
  }

  html {
    scroll-behavior: smooth;
  }

  body {
    background: var(--odc-black) !important;
    color: var(--odc-white) !important;
  }

  .odc-page,
  .odc-page * {
    box-sizing: border-box;
  }

  .odc-page {
    min-height: 100vh;
    background: var(--odc-black);
    color: var(--odc-white);
    font-family: Inter, Montserrat, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
    line-height: 1.55;
    overflow: hidden;
  }

  .odc-page a {
    color: inherit;
    text-decoration: none;
  }

  .odc-page button {
    font: inherit;
  }

  .odc-container {
    width: min(var(--odc-max), calc(100% - 48px));
    margin-inline: auto;
  }

  .odc-label {
    display: inline-flex;
    align-items: center;
    gap: 10px;
    font-family: "Space Mono", monospace;
    font-size: 11px;
    line-height: 1;
    letter-spacing: .16em;
    text-transform: uppercase;
    color: var(--odc-blue);
  }

  .odc-label::before {
    content: "";
    width: 28px;
    height: 1px;
    background: currentColor;
    opacity: .7;
  }

  .odc-kicker {
    font-family: "Space Mono", monospace;
    font-size: 10px;
    letter-spacing: .18em;
    text-transform: uppercase;
    color: var(--odc-muted);
  }

  .odc-h1,
  .odc-h2,
  .odc-h3,
  .odc-display {
    margin: 0;
    color: var(--odc-white);
    font-family: Montserrat, Inter, system-ui, sans-serif;
    letter-spacing: -.045em;
  }

  .odc-display {
    font-size: clamp(64px, 10vw, 154px);
    font-weight: 900;
    line-height: .86;
  }

  .odc-h1 {
    font-size: clamp(48px, 7vw, 104px);
    font-weight: 900;
    line-height: .92;
  }

  .odc-h2 {
    font-size: clamp(36px, 5vw, 72px);
    font-weight: 850;
    line-height: .98;
  }

  .odc-h3 {
    font-size: clamp(24px, 2.6vw, 38px);
    font-weight: 800;
    line-height: 1.05;
  }

  .odc-p {
    margin: 0;
    color: var(--odc-gray);
    font-size: clamp(15px, 1.25vw, 18px);
    line-height: 1.75;
  }

  .odc-btn {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    min-height: 56px;
    padding: 0 34px;
    border: 1px solid var(--odc-border-2);
    border-radius: 0;
    background: transparent;
    color: var(--odc-white);
    font-family: "Space Mono", monospace;
    font-size: 11px;
    letter-spacing: .12em;
    text-transform: uppercase;
    transition: transform .18s ease, background .18s ease, border-color .18s ease, color .18s ease;
  }

  .odc-btn:hover {
    transform: translateY(-2px);
    border-color: var(--odc-white);
  }

  .odc-btn--blue {
    background: var(--odc-blue);
    border-color: var(--odc-blue);
    color: #fff;
  }

  .odc-btn--blue:hover {
    background: var(--odc-blue-2);
    border-color: var(--odc-blue-2);
  }

  .odc-btn--green {
    background: var(--odc-green);
    border-color: var(--odc-green);
    color: #050505;
    font-weight: 700;
  }

  /* NAV */
  .odc-nav {
    position: fixed;
    z-index: 1000;
    top: 0;
    left: 0;
    right: 0;
    height: 76px;
    padding-inline: var(--odc-pad);
    display: flex;
    align-items: center;
    justify-content: space-between;
    border-bottom: 1px solid rgba(240, 237, 232, .08);
    background: rgba(5, 5, 5, .78);
    backdrop-filter: blur(18px);
  }

  .odc-nav__brand {
    display: flex;
    align-items: center;
    gap: 14px;
  }

  .odc-nav__mark {
    width: 34px;
    height: 34px;
    border: 1px solid var(--odc-green);
    transform: rotate(45deg);
    position: relative;
    flex: 0 0 auto;
  }

  .odc-nav__mark::before,
  .odc-nav__mark::after {
    content: "";
    position: absolute;
    background: var(--odc-green);
  }

  .odc-nav__mark::before {
    width: 1px;
    height: 24px;
    left: 50%;
    top: 4px;
  }

  .odc-nav__mark::after {
    height: 1px;
    width: 24px;
    top: 50%;
    left: 4px;
  }

  .odc-nav__name {
    display: grid;
    gap: 2px;
    font-family: "Space Mono", monospace;
    text-transform: uppercase;
  }

  .odc-nav__name strong {
    font-size: 13px;
    letter-spacing: .18em;
  }

  .odc-nav__name span {
    font-size: 9px;
    letter-spacing: .2em;
    color: var(--odc-muted);
  }

  .odc-nav__links {
    display: flex;
    align-items: center;
    gap: 36px;
    font-family: "Space Mono", monospace;
    font-size: 10px;
    letter-spacing: .14em;
    text-transform: uppercase;
    color: var(--odc-gray);
  }

  .odc-nav__links a:hover {
    color: var(--odc-green);
  }

  /* HERO CASE STUDY */
  .odc-case-hero {
    min-height: 100vh;
    padding: 150px var(--odc-pad) 88px;
    position: relative;
    display: grid;
    align-items: end;
    isolation: isolate;
  }

  .odc-case-hero::before {
    content: "";
    position: absolute;
    inset: 0;
    z-index: -3;
    background:
      radial-gradient(ellipse at 70% 20%, rgba(26, 110, 255, .25), transparent 32%),
      radial-gradient(ellipse at 26% 85%, rgba(198, 255, 0, .12), transparent 28%),
      #050505;
  }

  .odc-case-hero::after {
    content: "";
    position: absolute;
    inset: 0;
    z-index: -2;
    opacity: .22;
    background-image:
      linear-gradient(rgba(255, 255, 255, .08) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255, 255, 255, .08) 1px, transparent 1px);
    background-size: 72px 72px;
    mask-image: linear-gradient(to bottom, #000 0%, transparent 88%);
  }

  .odc-case-hero__grid {
    width: min(1400px, 100%);
    margin-inline: auto;
    display: grid;
    grid-template-columns: minmax(0, 1fr) minmax(420px, 560px);
    gap: clamp(48px, 7vw, 110px);
    align-items: end;
  }

  .odc-case-hero__meta {
    display: flex;
    flex-wrap: wrap;
    gap: 10px;
    margin: 36px 0 42px;
  }

  .odc-pill {
    border: 1px solid rgba(240, 237, 232, .16);
    color: var(--odc-gray);
    font-family: "Space Mono", monospace;
    font-size: 10px;
    letter-spacing: .14em;
    text-transform: uppercase;
    padding: 9px 12px;
    background: rgba(20, 20, 20, .58);
  }

  .odc-case-hero__copy {
    max-width: 780px;
  }

  .odc-case-hero__copy .odc-p {
    max-width: 640px;
    margin-top: 30px;
  }

  .odc-case-hero__actions {
    display: flex;
    flex-wrap: wrap;
    gap: 14px;
    margin-top: 42px;
  }

  /* Browser mock visual */
  .odc-browser {
    border: 1px solid rgba(240, 237, 232, .14);
    background: #070707;
    min-height: 640px;
    position: relative;
    overflow: hidden;
  }

  .odc-browser__bar {
    height: 42px;
    border-bottom: 1px solid rgba(240, 237, 232, .1);
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 16px;
    font-family: "Space Mono", monospace;
    font-size: 9px;
    letter-spacing: .12em;
    text-transform: uppercase;
    color: var(--odc-muted);
  }

  .odc-dots {
    display: flex;
    gap: 6px;
  }

  .odc-dots i {
    width: 7px;
    height: 7px;
    border: 1px solid var(--odc-border-2);
    display: block;
  }

  .odc-browser__screen {
    height: 598px;
    overflow: hidden;
    background: #0A0A0A;
    position: relative;
  }

  .odc-mini-site {
    transform-origin: top left;
    transform: scale(.52);
    width: 1080px;
    min-height: 1500px;
    background: #0A0A0A;
    color: #F0EDE8;
  }

  .odc-mini-nav {
    height: 72px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0 72px;
    border-bottom: 1px solid rgba(255, 255, 255, .06);
  }

  .odc-mini-logo {
    font-family: "Space Mono", monospace;
    letter-spacing: .18em;
    font-size: 16px;
    text-transform: uppercase;
  }

  .odc-mini-nav span:not(.odc-mini-logo) {
    font-family: "Space Mono", monospace;
    font-size: 10px;
    color: #A0A0A0;
    letter-spacing: .14em;
  }

  .odc-mini-hero {
    height: 600px;
    padding: 92px 72px;
    background:
      linear-gradient(to right, rgba(10, 10, 10, 1), rgba(10, 10, 10, .82) 43%, rgba(10, 10, 10, .28)),
      radial-gradient(ellipse at 78% 35%, rgba(255, 255, 255, .32), transparent 9%),
      radial-gradient(ellipse at 72% 44%, #1c1c1f 0%, #070707 50%, #020202 100%);
  }

  .odc-mini-hero p {
    font-family: "Space Mono", monospace;
    color: #1A6EFF;
    letter-spacing: .18em;
    font-size: 11px;
    text-transform: uppercase;
    margin-bottom: 26px;
  }

  .odc-mini-hero h2 {
    font-size: 96px;
    line-height: .92;
    letter-spacing: -.06em;
    margin: 0 0 28px;
    font-weight: 900;
    max-width: 620px;
  }

  .odc-mini-hero small {
    display: block;
    color: #A0A0A0;
    font-size: 20px;
    max-width: 470px;
    line-height: 1.5;
  }

  .odc-mini-btn {
    display: inline-flex;
    margin-top: 42px;
    padding: 18px 42px;
    background: #1A6EFF;
    font-family: "Space Mono", monospace;
    font-size: 11px;
    letter-spacing: .12em;
    text-transform: uppercase;
  }

  .odc-mini-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    height: 110px;
    border-top: 1px solid #1E1E1E;
    border-bottom: 1px solid #1E1E1E;
  }

  .odc-mini-stats div {
    display: grid;
    place-items: center;
    border-right: 1px solid #1E1E1E;
    font-size: 26px;
    font-weight: 800;
  }

  .odc-mini-cards {
    padding: 76px 72px;
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2px;
  }

  .odc-mini-card {
    min-height: 280px;
    border: 1px solid #1E1E1E;
    background: #141414;
    padding: 22px;
  }

  .odc-mini-card::before {
    content: "";
    display: block;
    height: 96px;
    margin-bottom: 24px;
    background: radial-gradient(ellipse at 62% 38%, rgba(255, 255, 255, .2), transparent 22%), #0d0d0d;
  }

  .odc-mini-card b {
    display: block;
    font-size: 22px;
    margin-bottom: 10px;
  }

  .odc-mini-card span {
    font-family: "Space Mono", monospace;
    color: #1A6EFF;
    font-size: 10px;
    letter-spacing: .12em;
  }

  /* SECTION BASE */
  .odc-section {
    padding: clamp(96px, 11vw, 170px) var(--odc-pad);
    border-top: 1px solid var(--odc-border);
    position: relative;
  }

  .odc-section--surface {
    background: var(--odc-surface);
  }

  .odc-section--blueprint {
    background:
      linear-gradient(rgba(255, 255, 255, .03) 1px, transparent 1px),
      linear-gradient(90deg, rgba(255, 255, 255, .03) 1px, transparent 1px),
      var(--odc-base);
    background-size: 48px 48px;
  }

  .odc-section__head {
    width: min(var(--odc-max), 100%);
    margin: 0 auto 64px;
    display: grid;
    grid-template-columns: 1.1fr .9fr;
    gap: 48px;
    align-items: end;
  }

  .odc-section__head .odc-label {
    margin-bottom: 20px;
  }

  /* OVERVIEW */
  .odc-overview-grid {
    width: min(var(--odc-max), 100%);
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1.4fr .6fr;
    gap: 2px;
  }

  .odc-overview-card {
    background: var(--odc-surface-2);
    border: 1px solid var(--odc-border);
    padding: clamp(28px, 4vw, 52px);
    min-height: 260px;
  }

  .odc-overview-card--large {
    min-height: 420px;
    display: grid;
    align-content: space-between;
  }

  .odc-stat-grid {
    display: grid;
    grid-template-columns: repeat(2, 1fr);
    gap: 2px;
  }

  .odc-stat {
    background: #0A0A0A;
    border: 1px solid var(--odc-border);
    padding: 28px;
  }

  .odc-stat strong {
    display: block;
    font-size: clamp(36px, 5vw, 72px);
    line-height: .9;
    letter-spacing: -.05em;
    color: var(--odc-white);
  }

  .odc-stat span {
    display: block;
    margin-top: 14px;
  }

  /* RESEARCH */
  .odc-research-grid {
    width: min(var(--odc-max), 100%);
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px;
  }

  .odc-research-card {
    background: #0A0A0A;
    border: 1px solid var(--odc-border);
    padding: 36px;
    min-height: 360px;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .odc-research-card strong {
    font-size: 54px;
    letter-spacing: -.05em;
    line-height: .9;
    color: var(--odc-green);
  }

  .odc-research-card h3 {
    margin: 28px 0 14px;
    font-size: 22px;
  }

  .odc-research-card p {
    color: var(--odc-gray);
    margin: 0;
  }

  /* BRAND SYSTEM */
  .odc-brand-board {
    width: min(var(--odc-max), 100%);
    margin: 0 auto;
    border: 1px solid var(--odc-border);
    background: #080808;
  }

  .odc-brand-row {
    display: grid;
    grid-template-columns: 1fr 1fr;
    border-bottom: 1px solid var(--odc-border);
  }

  .odc-brand-row:last-child {
    border-bottom: 0;
  }

  .odc-brand-cell {
    padding: clamp(28px, 4vw, 56px);
    border-right: 1px solid var(--odc-border);
    min-height: 270px;
  }

  .odc-brand-cell:last-child {
    border-right: 0;
  }

  .odc-obsidian-lockup {
    display: flex;
    align-items: center;
    gap: 28px;
    margin-top: 36px;
  }

  .odc-obsidian-mark {
    width: 84px;
    height: 84px;
    border: 8px solid #F0EDE8;
    transform: rotate(45deg);
    position: relative;
  }

  .odc-obsidian-mark::after {
    content: "";
    position: absolute;
    top: 12px;
    bottom: 12px;
    left: 50%;
    width: 8px;
    background: #F0EDE8;
    transform: translateX(-50%);
  }

  .odc-obsidian-word strong {
    display: block;
    font-family: "Space Mono", monospace;
    font-size: clamp(28px, 4vw, 56px);
    letter-spacing: .18em;
    line-height: 1;
  }

  .odc-obsidian-word span {
    display: block;
    margin-top: 12px;
    font-family: "Space Mono", monospace;
    letter-spacing: .42em;
    color: var(--odc-gray);
    text-transform: uppercase;
  }

  .odc-palette {
    display: grid;
    grid-template-columns: repeat(5, 1fr);
    gap: 2px;
    margin-top: 36px;
  }

  .odc-chip {
    min-height: 110px;
    border: 1px solid var(--odc-border);
    padding: 12px;
    display: flex;
    align-items: flex-end;
    font-family: "Space Mono", monospace;
    font-size: 10px;
    color: var(--odc-gray);
  }

  .odc-chip:nth-child(1) {
    background: #0A0A0A
  }

  .odc-chip:nth-child(2) {
    background: #141414
  }

  .odc-chip:nth-child(3) {
    background: #F0EDE8;
    color: #0A0A0A
  }

  .odc-chip:nth-child(4) {
    background: #1A6EFF;
    color: #fff
  }

  .odc-chip:nth-child(5) {
    background: #C9A84C;
    color: #050505
  }

  .odc-type-sample {
    margin-top: 32px;
  }

  .odc-type-sample b {
    display: block;
    font-size: clamp(40px, 5vw, 78px);
    line-height: .9;
    letter-spacing: -.06em;
  }

  .odc-type-sample span {
    display: block;
    margin-top: 24px;
    font-family: "Space Mono", monospace;
    color: var(--odc-gray);
    letter-spacing: .16em;
    text-transform: uppercase;
  }

  /* HOMEPAGE SHOWCASE */
  .odc-showcase {
    width: min(1320px, 100%);
    margin: 0 auto;
    display: grid;
    grid-template-columns: 420px minmax(0, 1fr);
    gap: 2px;
    align-items: stretch;
  }

  .odc-showcase__text {
    background: #0A0A0A;
    border: 1px solid var(--odc-border);
    padding: 44px;
    min-height: 680px;
    position: sticky;
    top: 96px;
    align-self: start;
  }

  .odc-showcase__text .odc-h2 {
    margin: 20px 0 28px;
  }

  .odc-showcase__list {
    display: grid;
    gap: 16px;
    margin-top: 42px;
  }

  .odc-showcase__list div {
    padding: 18px 0;
    border-top: 1px solid var(--odc-border);
  }

  .odc-showcase__list b {
    display: block;
    font-family: "Space Mono", monospace;
    font-size: 11px;
    letter-spacing: .14em;
    text-transform: uppercase;
    color: var(--odc-blue);
    margin-bottom: 8px;
  }

  .odc-showcase__visual {
    border: 1px solid var(--odc-border);
    background: #050505;
    height: 1200px;
    overflow: hidden;
    position: relative;
  }

  .odc-longpage {
    width: 100%;
    min-height: 2200px;
    background: #0A0A0A;
  }

  .odc-long-hero {
    min-height: 600px;
    padding: 72px 56px;
    background:
      linear-gradient(to right, rgba(10, 10, 10, 1), rgba(10, 10, 10, .86) 45%, rgba(10, 10, 10, .25)),
      radial-gradient(ellipse at 78% 25%, rgba(255, 255, 255, .35), transparent 8%),
      radial-gradient(ellipse at 75% 50%, #1b1b1b, #050505 60%);
  }

  .odc-long-hero .odc-kicker {
    color: var(--odc-blue);
  }

  .odc-long-hero h3 {
    font-size: clamp(48px, 7vw, 86px);
    line-height: .92;
    letter-spacing: -.06em;
    margin: 24px 0;
  }

  .odc-long-hero p {
    max-width: 420px;
    color: var(--odc-gray);
  }

  .odc-long-stats {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    border-top: 1px solid var(--odc-border);
    border-bottom: 1px solid var(--odc-border);
  }

  .odc-long-stats div {
    padding: 28px 18px;
    text-align: center;
    border-right: 1px solid var(--odc-border);
  }

  .odc-long-stats b {
    display: block;
    font-size: 28px;
  }

  .odc-long-stats span {
    font-family: "Space Mono", monospace;
    font-size: 9px;
    color: var(--odc-gray);
    letter-spacing: .12em;
    text-transform: uppercase;
  }

  .odc-long-section {
    padding: 72px 56px;
    border-bottom: 1px solid var(--odc-border);
  }

  .odc-long-section h4 {
    font-size: 42px;
    line-height: 1;
    letter-spacing: -.04em;
    margin: 16px 0 38px;
  }

  .odc-long-cards {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2px;
  }

  .odc-long-card {
    background: #141414;
    border: 1px solid var(--odc-border);
    min-height: 260px;
    padding: 20px;
  }

  .odc-long-card::before {
    content: "";
    height: 100px;
    display: block;
    margin: -20px -20px 20px;
    background: radial-gradient(ellipse at 50% 50%, rgba(255, 255, 255, .16), transparent 30%), #0d0d0d;
  }

  .odc-long-card b {
    display: block;
    margin-bottom: 8px;
  }

  .odc-long-gallery {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px;
  }

  .odc-long-shot {
    min-height: 360px;
    background: radial-gradient(ellipse at 40% 30%, rgba(255, 255, 255, .2), transparent 18%), #080808;
    position: relative;
  }

  .odc-long-shot::after {
    content: "BEFORE / AFTER";
    position: absolute;
    left: 16px;
    bottom: 16px;
    color: var(--odc-gray);
    font-family: "Space Mono", monospace;
    font-size: 9px;
    letter-spacing: .12em;
  }

  .odc-long-pricing {
    display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 2px;
  }

  .odc-long-price {
    background: #141414;
    border: 1px solid var(--odc-border);
    padding: 34px;
    min-height: 300px;
  }

  .odc-long-price b {
    display: block;
    font-size: 56px;
    letter-spacing: -.06em;
  }

  .odc-long-price:nth-child(2) {
    border-color: var(--odc-blue);
  }

  /* UI DETAILS */
  .odc-ui-grid {
    width: min(var(--odc-max), 100%);
    margin: 0 auto;
    display: grid;
    grid-template-columns: repeat(12, 1fr);
    gap: 2px;
  }

  .odc-ui-card {
    background: #111;
    border: 1px solid var(--odc-border);
    padding: 34px;
    min-height: 260px;
  }

  .odc-ui-card--wide {
    grid-column: span 7;
  }

  .odc-ui-card--mid {
    grid-column: span 5;
  }

  .odc-ui-card--full {
    grid-column: 1 / -1;
  }

  .odc-component-row {
    display: flex;
    flex-wrap: wrap;
    gap: 12px;
    margin-top: 26px;
    align-items: center;
  }

  .odc-input-mock {
    border: 1px solid var(--odc-border-2);
    padding: 16px;
    min-width: 220px;
    font-family: "Space Mono", monospace;
    font-size: 10px;
    color: var(--odc-muted);
    text-transform: uppercase;
  }

  .odc-slider-mock {
    height: 300px;
    margin-top: 24px;
    position: relative;
    background: linear-gradient(90deg, #111 0 50%, #1c1c1c 50%);
    overflow: hidden;
  }

  .odc-slider-mock::before {
    content: "";
    position: absolute;
    left: 50%;
    top: 0;
    bottom: 0;
    width: 2px;
    background: #fff;
  }

  .odc-slider-mock::after {
    content: "↔";
    position: absolute;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    width: 44px;
    height: 44px;
    border-radius: 50%;
    background: #fff;
    color: #050505;
    display: grid;
    place-items: center;
  }

  .odc-flow {
    display: grid;
    grid-template-columns: repeat(4, 1fr);
    gap: 2px;
    margin-top: 28px;
  }

  .odc-flow div {
    border: 1px solid var(--odc-border);
    padding: 24px;
    min-height: 160px;
  }

  .odc-flow b {
    display: block;
    font-size: 48px;
    color: #1E1E1E;
    letter-spacing: -.05em;
  }

  /* RESPONSIVE MOCKS */
  .odc-device-row {
    width: min(var(--odc-max), 100%);
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr 330px 330px;
    gap: 2px;
    align-items: end;
  }

  .odc-device-copy {
    border: 1px solid var(--odc-border);
    background: #0A0A0A;
    padding: 44px;
    min-height: 520px;
    display: grid;
    align-content: end;
  }

  .odc-phone {
    height: 680px;
    border: 1px solid var(--odc-border-2);
    background: #070707;
    padding: 12px;
    overflow: hidden;
  }

  .odc-phone__screen {
    height: 100%;
    background: #0A0A0A;
    overflow: hidden;
  }

  .odc-phone-hero {
    height: 360px;
    padding: 58px 24px;
    background: radial-gradient(ellipse at 70% 25%, rgba(255, 255, 255, .24), transparent 12%), #050505;
  }

  .odc-phone-hero h4 {
    font-size: 44px;
    line-height: .95;
    letter-spacing: -.05em;
    margin: 22px 0;
  }

  .odc-phone-card {
    margin: 2px 0;
    padding: 24px;
    background: #141414;
    border: 1px solid var(--odc-border);
    min-height: 160px;
  }

  .odc-phone-card b {
    display: block;
    margin-bottom: 8px;
  }

  /* FINAL */
  .odc-final {
    padding: 150px var(--odc-pad);
    background:
      linear-gradient(to right, rgba(5, 5, 5, 1), rgba(5, 5, 5, .76)),
      radial-gradient(ellipse at 85% 40%, rgba(198, 255, 0, .12), transparent 28%),
      #050505;
    border-top: 1px solid var(--odc-border);
  }

  .odc-final__inner {
    width: min(var(--odc-max), 100%);
    margin: 0 auto;
    display: grid;
    grid-template-columns: 1fr .7fr;
    gap: 64px;
    align-items: end;
  }

  .odc-final .odc-h1 {
    margin: 24px 0 30px;
  }

  .odc-final__panel {
    border: 1px solid rgba(198, 255, 0, .28);
    padding: 36px;
    background: rgba(198, 255, 0, .03);
  }

  .odc-final__panel ul {
    margin: 24px 0 0;
    padding: 0;
    list-style: none;
    display: grid;
    gap: 14px;
    color: var(--odc-gray);
  }

  .odc-final__panel li::before {
    content: "→";
    color: var(--odc-green);
    margin-right: 10px;
  }

  /* REVEAL */
  .odc-reveal {
    opacity: 0;
    transform: translateY(24px);
    transition: opacity .7s cubic-bezier(.16, 1, .3, 1), transform .7s cubic-bezier(.16, 1, .3, 1);
  }

  .odc-reveal.is-visible {
    opacity: 1;
    transform: none;
  }

  @media (max-width: 1100px) {
    .odc-nav__links {
      display: none;
    }

    .odc-case-hero__grid,
    .odc-section__head,
    .odc-overview-grid,
    .odc-showcase,
    .odc-final__inner {
      grid-template-columns: 1fr;
    }

    .odc-browser {
      min-height: 520px;
    }

    .odc-showcase__text {
      position: relative;
      top: auto;
      min-height: auto;
    }

    .odc-showcase__visual {
      height: 900px;
    }

    .odc-research-grid,
    .odc-brand-row,
    .odc-device-row {
      grid-template-columns: 1fr;
    }

    .odc-brand-cell {
      border-right: 0;
      border-bottom: 1px solid var(--odc-border);
    }

    .odc-ui-card--wide,
    .odc-ui-card--mid {
      grid-column: 1/-1;
    }
  }

  @media (max-width: 720px) {
    .odc-nav {
      padding-inline: 24px;
    }

    .odc-nav .odc-btn {
      display: none;
    }

    .odc-case-hero {
      padding-top: 120px;
    }

    .odc-case-hero__grid {
      gap: 40px;
    }

    .odc-overview-card,
    .odc-research-card,
    .odc-brand-cell {
      padding: 28px;
    }

    .odc-stat-grid,
    .odc-palette,
    .odc-long-cards,
    .odc-long-gallery,
    .odc-long-pricing,
    .odc-flow {
      grid-template-columns: 1fr;
    }

    .odc-obsidian-lockup {
      align-items: flex-start;
      flex-direction: column;
    }

    .odc-showcase__visual {
      height: 700px;
    }

    .odc-mini-site {
      transform: scale(.38);
    }
  }
</style>

<main class="odc-page" id="top">
  <nav class="odc-nav" aria-label="Case study navigation">
    <a class="odc-nav__brand" href="<?php echo esc_url(home_url('/')); ?>" aria-label="Back to Mavros Agency homepage">
      <span class="odc-nav__mark" aria-hidden="true"></span>
      <span class="odc-nav__name"><strong>Mavros</strong><span>Case Study</span></span>
    </a>
    <div class="odc-nav__links" aria-hidden="true">
      <a href="#overview">Overview</a>
      <a href="#visuals">Visuals</a>
      <a href="#ux">UX System</a>
      <a href="#mobile">Mobile</a>
    </div>
    <a class="odc-btn odc-btn--green" href="<?php echo esc_url(home_url('/#kontakt')); ?>">Work with Mavros</a>
  </nav>

  <section class="odc-case-hero">
    <div class="odc-case-hero__grid">
      <div class="odc-case-hero__copy odc-reveal">
        <span class="odc-label">Portfolio case study</span>
        <div class="odc-case-hero__meta">
          <span class="odc-pill">UX/UI Design</span>
          <span class="odc-pill">Brand Direction</span>
          <span class="odc-pill">Conversion Strategy</span>
          <span class="odc-pill">Automotive Detailing</span>
        </div>
        <h1 class="odc-display">Obsidian<br>Detailing.</h1>
        <p class="odc-p">A fictional but research-led premium automotive detailing studio designed to feel like a real business: sharp positioning, dark luxury visual language, conversion-focused booking flow, service clarity, pricing transparency, and a gallery system built around trust.</p>
        <div class="odc-case-hero__actions">
          <a class="odc-btn odc-btn--green" href="#visuals">View the project</a>
          <a class="odc-btn" href="#ux">See UX logic</a>
        </div>
      </div>

      <div class="odc-browser odc-reveal" aria-label="Obsidian Detailing homepage mockup">
        <div class="odc-browser__bar"><span>obsidian-detailing.hr</span><span class="odc-dots"><i></i><i></i><i></i></span></div>
        <div class="odc-browser__screen">
          <div class="odc-mini-site">
            <div class="odc-mini-nav"><span class="odc-mini-logo">Obsidian</span><span>Services</span><span>Our Work</span><span>Pricing</span><span>Book Now</span></div>
            <div class="odc-mini-hero">
              <p>Zagreb's premium detailing studio</p>
              <h2>Your paint<br>deserves<br>better.</h2><small>Appointment-only automotive detailing and ceramic protection. For people who take their cars seriously.</small><span class="odc-mini-btn">Book your detail</span>
            </div>
            <div class="odc-mini-stats">
              <div>4.9 ★</div>
              <div>800+</div>
              <div>5 Years</div>
              <div>Gyeon</div>
            </div>
            <div class="odc-mini-cards">
              <div class="odc-mini-card"><b>Express</b><span>From €89</span></div>
              <div class="odc-mini-card"><b>Ceramic</b><span>From €690</span></div>
              <div class="odc-mini-card"><b>Correction</b><span>From €390</span></div>
              <div class="odc-mini-card"><b>Interior</b><span>From €149</span></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="odc-section odc-section--surface" id="overview">
    <div class="odc-overview-grid">
      <article class="odc-overview-card odc-overview-card--large odc-reveal">
        <div>
          <span class="odc-label">Project overview</span>
          <h2 class="odc-h2" style="margin-top:24px;">A fake client built with real business logic.</h2>
        </div>
        <p class="odc-p">The goal was not to make another beautiful dark automotive page. The goal was to make a portfolio project that explains why design matters commercially: fewer repetitive questions, more qualified inquiries, stronger perceived value, clearer packages, and more trust before the first message.</p>
      </article>
      <div class="odc-stat-grid">
        <div class="odc-stat odc-reveal"><strong>4.9</strong><span class="odc-kicker">trust signal</span></div>
        <div class="odc-stat odc-reveal"><strong>800+</strong><span class="odc-kicker">cars detailed</span></div>
        <div class="odc-stat odc-reveal"><strong>€50</strong><span class="odc-kicker">booking deposit</span></div>
        <div class="odc-stat odc-reveal"><strong>3</strong><span class="odc-kicker">step booking</span></div>
      </div>
    </div>
  </section>

  <section class="odc-section odc-section--blueprint">
    <div class="odc-section__head odc-reveal">
      <div><span class="odc-label">Research direction</span>
        <h2 class="odc-h2" style="margin-top:20px;">The opportunity was clarity, not decoration.</h2>
      </div>
      <p class="odc-p">Detailing clients do not only buy shine. They buy confidence: confidence that their paint will not be damaged, that the result is worth the price, and that the studio knows exactly what it is doing.</p>
    </div>
    <div class="odc-research-grid">
      <article class="odc-research-card odc-reveal">
        <div><strong>01</strong>
          <h3>Trust before booking</h3>
          <p>Before/after visuals, review blocks, certifications, transparent process, and real-looking studio details reduce hesitation.</p>
        </div><span class="odc-kicker">conversion trigger</span>
      </article>
      <article class="odc-research-card odc-reveal">
        <div><strong>02</strong>
          <h3>Pricing without fear</h3>
          <p>Starting prices filter low-quality leads while still allowing final quotes after inspection.</p>
        </div><span class="odc-kicker">lead quality</span>
      </article>
      <article class="odc-research-card odc-reveal">
        <div><strong>03</strong>
          <h3>Visual proof matters</h3>
          <p>The gallery is not decoration. It is the argument. It shows surface condition, correction quality, and value.</p>
        </div><span class="odc-kicker">proof system</span>
      </article>
    </div>
  </section>

  <section class="odc-section" id="visuals">
    <div class="odc-section__head odc-reveal">
      <div><span class="odc-label">Visual identity</span>
        <h2 class="odc-h2" style="margin-top:20px;">Dark luxury without car-culture clichés.</h2>
      </div>
      <p class="odc-p">No racing stripes, no chrome, no dealership energy. The visual language borrows from Swiss watch brands, professional camera systems, and technical inspection tools.</p>
    </div>

    <div class="odc-brand-board odc-reveal">
      <div class="odc-brand-row">
        <div class="odc-brand-cell">
          <span class="odc-kicker">Primary lockup</span>
          <div class="odc-obsidian-lockup"><span class="odc-obsidian-mark"></span>
            <div class="odc-obsidian-word"><strong>OBSIDIAN</strong><span>Detailing</span></div>
          </div>
        </div>
        <div class="odc-brand-cell">
          <span class="odc-kicker">Palette</span>
          <div class="odc-palette">
            <div class="odc-chip">#0A0A0A</div>
            <div class="odc-chip">#141414</div>
            <div class="odc-chip">#F0EDE8</div>
            <div class="odc-chip">#1A6EFF</div>
            <div class="odc-chip">#C9A84C</div>
          </div>
        </div>
      </div>
      <div class="odc-brand-row">
        <div class="odc-brand-cell"><span class="odc-kicker">Display typography</span>
          <div class="odc-type-sample"><b>Your paint deserves better.</b><span>bold geometric sans · tight tracking</span></div>
        </div>
        <div class="odc-brand-cell"><span class="odc-kicker">Monospace system</span>
          <div class="odc-type-sample"><b style="font-family:'Space Mono',monospace;font-size:42px;letter-spacing:.08em;">EVERY SURFACE TELLS THE TRUTH.</b><span>labels · metadata · service tags</span></div>
        </div>
      </div>
    </div>
  </section>

  <section class="odc-section odc-section--surface">
    <div class="odc-showcase">
      <aside class="odc-showcase__text odc-reveal">
        <span class="odc-label">Homepage system</span>
        <h2 class="odc-h2">A landing page structured like a sales conversation.</h2>
        <p class="odc-p">Hero for positioning. Trust bar for credibility. Problem/solution for education. Services for choice. Gallery for proof. Pricing for qualification. FAQ for objection handling. Final CTA for action.</p>
        <div class="odc-showcase__list">
          <div><b>01 · Position</b><span class="odc-p">Premium, appointment-only, paint-focused.</span></div>
          <div><b>02 · Prove</b><span class="odc-p">Before/after sliders, reviews, stats, certifications.</span></div>
          <div><b>03 · Convert</b><span class="odc-p">Booking deposit, clear packages, direct quote path.</span></div>
        </div>
      </aside>
      <div class="odc-showcase__visual odc-reveal">
        <div class="odc-longpage">
          <section class="odc-long-hero"><span class="odc-kicker">Zagreb's premium detailing studio</span>
            <h3>Your paint<br>deserves<br>better.</h3>
            <p>Appointment-only automotive detailing and ceramic protection. For people who take their cars seriously.</p><span class="odc-mini-btn">Book your detail</span>
          </section>
          <div class="odc-long-stats">
            <div><b>4.9 ★</b><span>Google Reviews</span></div>
            <div><b>800+</b><span>Cars Detailed</span></div>
            <div><b>5 Years</b><span>In Business</span></div>
            <div><b>Gyeon</b><span>Certified</span></div>
          </div>
          <section class="odc-long-section"><span class="odc-kicker" style="color:#1A6EFF">What we do</span>
            <h4>Four services.<br>One obsession.</h4>
            <div class="odc-long-cards">
              <div class="odc-long-card"><b>Express Detail</b><span class="odc-kicker">From €89</span></div>
              <div class="odc-long-card"><b>Ceramic Coating</b><span class="odc-kicker">From €690</span></div>
              <div class="odc-long-card"><b>Paint Correction</b><span class="odc-kicker">From €390</span></div>
              <div class="odc-long-card"><b>Interior Detail</b><span class="odc-kicker">From €149</span></div>
            </div>
          </section>
          <section class="odc-long-section"><span class="odc-kicker" style="color:#1A6EFF">The work</span>
            <h4>Results don't<br>need a caption.</h4>
            <div class="odc-long-gallery">
              <div class="odc-long-shot"></div>
              <div class="odc-long-shot"></div>
              <div class="odc-long-shot"></div>
            </div>
          </section>
          <section class="odc-long-section"><span class="odc-kicker" style="color:#1A6EFF">Transparent pricing</span>
            <h4>No surprises.<br>Just results.</h4>
            <div class="odc-long-pricing">
              <div class="odc-long-price"><span class="odc-kicker">Essential</span><b>€89</b></div>
              <div class="odc-long-price"><span class="odc-kicker">Professional</span><b>€390</b></div>
              <div class="odc-long-price"><span class="odc-kicker">Signature</span><b>€690</b></div>
            </div>
          </section>
        </div>
      </div>
    </div>
  </section>

  <section class="odc-section" id="ux">
    <div class="odc-section__head odc-reveal">
      <div><span class="odc-label">UX/UI details</span>
        <h2 class="odc-h2" style="margin-top:20px;">The page is built around decisions, not just sections.</h2>
      </div>
      <p class="odc-p">Each interaction exists to either clarify the service, increase confidence, or reduce uncertainty before booking.</p>
    </div>
    <div class="odc-ui-grid">
      <article class="odc-ui-card odc-ui-card--wide odc-reveal"><span class="odc-kicker">Before / after slider</span>
        <h3 class="odc-h3" style="margin-top:18px;">Proof you can drag.</h3>
        <p class="odc-p" style="margin-top:18px;">The slider turns visual quality into an interaction. It makes the result feel inspected, not claimed.</p>
        <div class="odc-slider-mock"></div>
      </article>
      <article class="odc-ui-card odc-ui-card--mid odc-reveal"><span class="odc-kicker">Booking fields</span>
        <h3 class="odc-h3" style="margin-top:18px;">Low-friction lead capture.</h3>
        <div class="odc-component-row"><span class="odc-input-mock">Vehicle model</span><span class="odc-input-mock">Preferred service</span><span class="odc-input-mock">Upload photos</span><a class="odc-btn odc-btn--blue" href="#">Continue</a></div>
      </article>
      <article class="odc-ui-card odc-ui-card--full odc-reveal"><span class="odc-kicker">Booking flow</span>
        <h3 class="odc-h3" style="margin-top:18px;">From curiosity to confirmed slot.</h3>
        <div class="odc-flow">
          <div><b>01</b><span class="odc-kicker">Choose service</span></div>
          <div><b>02</b><span class="odc-kicker">Select date</span></div>
          <div><b>03</b><span class="odc-kicker">Pay deposit</span></div>
          <div><b>04</b><span class="odc-kicker">Confirmation</span></div>
        </div>
      </article>
    </div>
  </section>

  <section class="odc-section odc-section--blueprint" id="mobile">
    <div class="odc-device-row">
      <div class="odc-device-copy odc-reveal"><span class="odc-label">Responsive system</span>
        <h2 class="odc-h2" style="margin-top:22px;">Mobile-first where the lead actually happens.</h2>
        <p class="odc-p" style="margin-top:24px;">The mobile version prioritizes fast comprehension: sticky booking CTA, compressed service cards, visible pricing, tap-friendly FAQ, and gallery proof before the user has to commit.</p>
      </div>
      <div class="odc-phone odc-reveal">
        <div class="odc-phone__screen">
          <div class="odc-phone-hero"><span class="odc-kicker" style="color:#1A6EFF">Premium detailing</span>
            <h4>Your paint deserves better.</h4><span class="odc-mini-btn">Book now</span>
          </div>
          <div class="odc-phone-card"><b>Paint Correction</b><span class="odc-kicker">From €390</span></div>
          <div class="odc-phone-card"><b>Ceramic Coating</b><span class="odc-kicker">From €690</span></div>
        </div>
      </div>
      <div class="odc-phone odc-reveal">
        <div class="odc-phone__screen">
          <div class="odc-phone-card"><b>4.9 ★</b><span class="odc-kicker">Google Reviews</span></div>
          <div class="odc-phone-card"><b>Before / After</b><span class="odc-kicker">Drag to inspect</span></div>
          <div class="odc-phone-card"><b>No surprises.</b><span class="odc-kicker">Starting prices shown</span></div>
          <div class="odc-phone-card"><b>FAQ</b><span class="odc-kicker">Objection handling</span></div>
        </div>
      </div>
    </div>
  </section>

  <section class="odc-final">
    <div class="odc-final__inner">
      <div class="odc-reveal"><span class="odc-label">Result</span>
        <h2 class="odc-h1">A portfolio piece that sells the process.</h2>
        <p class="odc-p">Obsidian Detailing works as a case study because it has both visual impact and business reasoning. It lets Mavros Agency show brand direction, UX structure, UI craft, conversion thinking, responsive design, and storytelling in one coherent project.</p>
        <div class="odc-case-hero__actions"><a class="odc-btn odc-btn--green" href="<?php echo esc_url(home_url('/#portfolio')); ?>">Back to portfolio</a><a class="odc-btn" href="<?php echo esc_url(home_url('/#kontakt')); ?>">Start a project</a></div>
      </div>
      <aside class="odc-final__panel odc-reveal"><span class="odc-kicker">What this case study demonstrates</span>
        <ul>
          <li>Premium visual direction without generic templates</li>
          <li>Conversion-focused information architecture</li>
          <li>Interactive proof through before/after sliders</li>
          <li>Pricing transparency and lead qualification</li>
          <li>Mobile-first booking logic</li>
        </ul>
      </aside>
    </div>
  </section>
</main>

<script>
  (function() {
    const reveal = document.querySelectorAll('.odc-reveal');
    const obs = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          obs.unobserve(entry.target);
        }
      });
    }, {
      threshold: .12
    });
    reveal.forEach((el) => obs.observe(el));
  })();
</script>

<?php get_footer(); ?>