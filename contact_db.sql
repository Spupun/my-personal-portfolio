

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `contact_form` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `number` varchar(10) NOT NULL,
  `message` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `contact_form` (`id`, `name`, `email`, `number`, `message`) VALUES
(5, 'shaikh anas', 'shaikh@gmail.com', '1234567890', 'hi, how are you?');


ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `contact_form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

