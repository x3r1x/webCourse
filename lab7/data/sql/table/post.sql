CREATE TABLE post
(
    `post_id` INT NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(255) NOT NULL,
    `subscription` VARCHAR(255) NOT NULL,
    `author_photo` VARCHAR(255) NOT NULL,
    `author_name` VARCHAR(255) NOT NULL,
    `date` TIMESTAMP,
    `post_text` VARCHAR(255) NOT NULL,
    `image` VARCHAR(255) NOT NULL,
    `featured` TINYINT(1) DEFAULT 0,
    `background_image_modifier` VARCHAR(255),
    `tag` VARCHAR(255),
    PRIMARY KEY (`post_id`)
)