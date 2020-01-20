USE `docfully_web`
DROP procedure if EXISTS `add_user`;
DELIMITER $$
USE `docfully_web`$$
CREATE PROCEDURE `add_user`(IN in_user_name varchar(50), IN in_email varchar(80), IN in_passcode char(40), IN in_user_type varchar(8), OUT out_user_id int)
BEGIN
    DECLARE varUserType int;
    DECLARE varUserId int;

    SET varUserType = (SELECT id FROM user_type WHERE type_name = in_user_type);
    SET varUserId = (SELECT id FROM user WHERE user_name = in_user_name AND user_type_id = varUserType);

    IF varUserId IS NULL THEN
        INSERT INTO user (user_name, email, passcode, user_type_id)
        VALUES (in_user_name, in_email, in_passcode, varUserType);

        SET out_user_id = LAST_INSERT_ID();
    ELSE
        SET out_user_id = 0;
    END IF;
END$$
DELIMITER ;
