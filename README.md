# peterbinks.net

Peter Binkowski's personal site.

## Tech Stack

- [Astro](https://astro.build) - Static site generator
- SCSS for styling
- [Fira](https://typekit.com/fonts/fira-sans) & [Effra](https://typekit.com/fonts/effra) typefaces via Adobe Fonts

## Development

```bash
# Install dependencies
npm install

# Start dev server
npm run dev

# Build for production
npm run build

# Preview production build
npm run preview
```

## Project Structure

```
src/
├── components/     # Header, Footer components
├── content/blog/   # Blog posts (Markdown)
├── layouts/        # Base layout
├── pages/          # Page routes
│   ├── index.astro
│   ├── about.astro
│   ├── quotes.astro
│   ├── reading.astro
│   ├── blog/
│   └── work/
└── styles/         # SCSS stylesheets
public/
└── images/         # Static images
```

## Deployment

The site deploys automatically to [NearlyFreeSpeech](https://nearlyfreespeech.net) via GitHub Actions on push to `main`.

### Required GitHub Secrets

Add these in `Settings > Secrets and variables > Actions`:

- `NFSN_USERNAME` - NearlyFreeSpeech SSH username
- `NFSN_PASSWORD` - NearlyFreeSpeech SSH password
- `NFSN_HOSTNAME` - NFSN SSH hostname (e.g., `ssh.phx.nearlyfreespeech.net`)

## Adding Content

### Blog Posts

Add Markdown files to `src/content/blog/`:

```markdown
---
title: "Post Title"
date: 2024-01-01
---

Post content here...
```

### Other Pages

Quotes, reading list, and work projects are currently hardcoded in their respective page files in `src/pages/`. Edit those directly.
