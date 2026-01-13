export interface Book {
  title: string;
  author: string;
  status: "READING" | "COMPLETED" | "QUEUED";
  image: string;
  thumbnail: string;
  description: string;
}

export const books: Book[] = [
  {
    title: "Red Mars",
    author: "Kim Stanley Robinson",
    status: "READING",
    image: "/images/reading/m1_red-mars.jpg",
    thumbnail: "/images/reading/m1_red-mars-thumb.jpg",
    description:
      "Red Mars is a story of early attempts to terraform and colonize Mars. Robinson does a great job of being as scientifically accurate as possible, while detailing a plausible way for Mars to one day be colonized.",
  },
];

export const currentBook = books.find((book) => book.status === "READING") ?? books[0];
