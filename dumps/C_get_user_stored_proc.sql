USE `docfully_web`
DROP procedure if EXISTS `get_user`;
DELIMITER $$
USE `docfully_web`$$
CREATE PROCEDURE `get_user`(IN in_user_name varchar(40), IN in_passcode char(40), IN in_user_type varchar(8))
BEGIN
    SELECT     u.id,
               u.user_name
    FROM       user u
    INNER JOIN user_type ut ON u.user_type_id = ut.id
    WHERE      user_name = in_user_name
    AND        passcode = in_passcode
    AND        type_name = in_user_type;
END$$
DELIMITER ;

