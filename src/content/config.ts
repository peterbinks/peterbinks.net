import { defineCollection, z } from "astro:content";

const blog = defineCollection({
  type: "content",
  schema: z.object({
    title: z.string(),
    date: z.date().optional(),
    draft: z.boolean().optional().default(false),
    archive: z.boolean().optional().default(false),
  }),
});

const work = defineCollection({
  type: "content",
  schema: z.object({
    title: z.string(),
    description: z.string(),
    image: z.string().optional(),
    tags: z.array(z.string()).optional().default([]),
    date: z.date().optional(),
    draft: z.boolean().optional().default(false),
    order: z.number().optional(),
  }),
});

export const collections = { blog, work };
