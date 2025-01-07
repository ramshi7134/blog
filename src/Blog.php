<?php

namespace Webpacks\Blog;

class Blog
{
    /**
     * Get the default pagination value for the blog.
     *
     * @return int
     */
    public static function getPagination()
    {
        return config('blog.pagination');
    }

    /**
     * Get all available statuses for blog posts.
     *
     * @return array
     */
    public static function getStatuses()
    {
        return config('blog.statuses');
    }

    /**
     * Format a blog post title as a slug.
     *
     * @param string $title
     * @return string
     */
    public static function generateSlug(string $title)
    {
        return \Str::slug($title);
    }
}
