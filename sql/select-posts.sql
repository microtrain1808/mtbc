SELECT
    title,
    CONCAT(first_name, ' ', last_name) AS author
FROM
    posts,
    users
WHERE
    posts.user_id = users.id;