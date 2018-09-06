CREATE TABLE articles (
    id CHAR(36) PRIMARY KEY COMMENT 'Primary Key UUID',
    title VARCHAR(255) COMMENT 'Title of a blog post',
    slug VARCHAR(255) COMMENT 'An SEO and human friendly lookup key',
    meta_keywords VARCHAR(255) COMMENT 'Meta data for SEO',
    meta_description VARCHAR(255) COMMENT 'Meta data for SEO',
    body TEXT COMMENT 'The coment of the blog post',
    user_id VARCHAR(36) COMMENT 'The creator of the blog post',
    created DATETIME DEFAULT CURRENT_TIMESTAMP COMMENT 'Timestamp of post creation',
    modified DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Timestamp of last post modification' 
) ENGINE=INNODB;