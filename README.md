# peterbinks.net

Peter Binkowski's personal site.

## Tech Stack

- [Astro](https://astro.build) - Static site generator
- CSS with shared color, typography, and spacing tokens
- System font stack (no web fonts); system monospace for metadata
- Reading column with a sticky sidebar for links, music, and reading; light and dark themes

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
├── components/     # Header, navigation, footer, theme, and current interests
├── content/blog/   # Blog posts (Markdown)
├── content/work/   # Portfolio projects (Markdown)
├── data/           # Reading list and quotes
├── layouts/        # Base layout
├── pages/          # Page routes
│   ├── index.astro
│   ├── about.astro
│   ├── quotes.astro
│   ├── reading.astro
│   ├── blog/
│   └── work/
└── styles/         # Shared CSS stylesheet
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

Quotes and the reading list live in `src/data/`. Portfolio projects live in `src/content/work/`. Archived and draft blog posts remain unpublished.

small edit
