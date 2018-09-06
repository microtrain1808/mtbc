INSERT INTO
    users
SET
    id=UUID(),
    first_name='Bob',
    last_name='Smith',
    email='bob@example.net';

INSERT INTO
    users
SET
    id=UUID(),
    first_name='Sally',
    last_name='Parker',
    email='sparker@gov.org';

SELECT
    *
FROM
    users;
