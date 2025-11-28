## Purpose
Short guide for AI coding agents working on this repo (static website for Sydney Road Dental Care).

Be concise: this repo is a collection of static HTML pages + assets (CSS, images, a tiny JS file). There is no build system, server-side code, or tests in the repository.

## Big picture
- Structure: top-level HTML pages (e.g. `index.html`, `About.html`, `Service.html`, `Contact-Us.html`) drive the site. Reusable assets live under `assets/`:
  - `assets/css/` — bootstrap + project CSS (see order: bootstrap, `font.css`, `style.css`, then `rshn-style.css`/`rshin-style.css`)
  - `assets/js/` — `bootstrap.min.js` and `script.js` (currently empty)
  - `assets/imgs/` — categorized image folders (e.g. `home/`, `Service/`, `Service-Details/`).

## Key conventions & gotchas (project-specific)
- Pages are static HTML files named by the page title (e.g. `Contact-Us.html` maps to the contact page). Edit the HTML files directly to change content.
- Navigation links are hard-coded in each page's header/footer. Keep edits consistent across the multiple HTML files.
- Forms: contact/career forms use `action="#"` (placeholders). There is no server-side form endpoint here — hooking up a backend or third-party form service is required for submissions.
- JS: `assets/js/script.js` is present but empty. Most interactive behavior comes from Bootstrap and external libs (GSAP on `index.html`).
- CSS filename mismatch: `index.html` references `assets/css/rshn-style.css` but the repo contains `assets/css/rshin-style.css`. Confirm filename or update the HTML to match — this is a real, discoverable bug.

## Editing patterns / examples
- To change the site header text or nav items, edit `index.html` (header section) and mirror changes across the other top-level `.html` files.
- To change the hero image on the homepage: replace `assets/imgs/home/hero-image-square.png` and keep the same filename or update the inline `style=\"background-image: url(...)\"`.
- To adjust layout or styles:
  - Modify `assets/css/style.css` for broad layout changes.
  - Use `assets/css/rshn-style.css` (or the actual stylesheet in repo) for page-specific overrides; ensure the file referenced in the HTML is the correct filename.

## Integrations & external dependencies
- External CDN/third-party libs used in pages:
  - GSAP + ScrollTrigger (homepage animations) loaded from CDN in `index.html`.
  - Font Awesome kit is included via kit URL in pages.
  - Bootstrap CSS is included from `assets/css/bootstrap.min.css` (local copy).
- No backend endpoints are present. If you add API calls, add clear stubs and document endpoints (where to add base URLs) in a new README or in this file.

## Developer workflows (how to be productive locally)
- Preview quickly (from repo root) using a simple static server. From the project's root (Windows Bash):

```bash
# serve current directory on port 8000
python -m http.server 8000
# then open http://localhost:8000 in your browser (or http://localhost:8000/index.html)
```

- Alternatively, use VS Code Live Server extension for instant reloads.
- There is no build step or package manager present — commits are changes to files directly.

## Recommended small tasks for new contributors
- Fix the CSS filename mismatch noted above and verify styles load in all pages.
- Add a README at the repo root describing the preview steps and deployment method used by the team.
- If you implement forms, document the endpoint and expected payload in a small `docs/forms.md`.

## Where to look for examples
- Header/nav markup: `index.html` (header section) — keep edits harmonized across other pages.
- Homepage animations and external CDN usage: `index.html` head (GSAP and ScrollTrigger references).
- Contact form markup: `Contact-Us.html` (search for `form action="#"`).

If anything in this file is unclear or you'd like more detail (for example, a recommended deploy step or a small patch to fix the CSS filename issue), tell me which area to expand and I'll iterate.
