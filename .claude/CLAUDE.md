# peterbinks.net

Personal website for Peter Binkowski - Design Engineer based in Chicago, IL.

## Tech Stack

- **Framework:** Astro 5
- **Styling:** SCSS with CSS custom properties
- **Deployment:** GitHub Actions → NearlyFreeSpeech

## Project History

### Migration (from original)
- Migrated from Gulp/Kirby CMS to Astro 5
- Preserved content: blog posts, work portfolio, quotes, reading list

### Redesign: Terminal Broadsheet (`redesign/terminal-broadsheet` branch)
Complete visual overhaul with terminal/cyberpunk aesthetic:

**Design Features:**
- Monospace typography throughout
- CRT scanlines overlay effect
- ASCII art logo header
- Glitch hover effects on navigation
- "System status" sidebar (calculates user's age as "uptime")
- Typing animation on homepage

**Theme System:**
- Dark theme (default for system dark preference): warm dark browns with amber accents
- Light theme ("Paper Terminal"): warm cream/newsprint aesthetic
- Theme toggle `[DARK]`/`[LIGHT]` in header, persists to localStorage
- Respects `prefers-color-scheme` on first visit

**Accent Color Picker:**
- 4 color options: Amber (default), Cyan, Magenta, Green
- Square swatch button that expands to show options
- Works with both dark and light themes
- Persists to localStorage

## Key Files

- `src/styles/main.scss` - Design tokens, color variants for themes + accents
- `src/components/ColorPicker.astro` - Accent color picker
- `src/components/ThemeToggle.astro` - Dark/light toggle
- `src/components/Header.astro` - Site header with controls
- `src/layouts/BaseLayout.astro` - Main layout with theme/accent initialization
- `src/components/Scanlines.astro` - CRT effect overlay
- `src/components/Sidebar.astro` - System status sidebar with uptime calc

## Important Details

- **Birthday for uptime calc:** August 7, 1991
- **Theme storage:** `localStorage.getItem('theme')` - values: `'light'` or `'dark'`
- **Accent storage:** `localStorage.getItem('accent')` - values: `'amber'`, `'cyan'`, `'magenta'`, `'green'`
- **Theme attribute:** `data-theme="light"` or `data-theme="dark"` on `<html>`
- **Accent attribute:** `data-accent="cyan"` etc. on `<html>`
- **Default theme:** Light (unless system prefers dark)

## Branches

- `main` - Original Astro migration
- `redesign/terminal-broadsheet` - Terminal/cyberpunk redesign (current work)
