-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 11:37 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `glamaura`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouttext`
--

CREATE TABLE `abouttext` (
  `ab_id` int(255) NOT NULL,
  `ab_head1` varchar(1000) NOT NULL,
  `ab_para1` varchar(1000) NOT NULL,
  `ab_head2` varchar(255) NOT NULL,
  `ab_para2` varchar(1000) NOT NULL,
  `ab_point1` varchar(1000) NOT NULL,
  `ab_point2` varchar(1000) NOT NULL,
  `ab_point3` varchar(1000) NOT NULL,
  `ab_point4` varchar(1000) NOT NULL,
  `ab_head3` varchar(1000) NOT NULL,
  `ab_para3` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `abouttext`
--

INSERT INTO `abouttext` (`ab_id`, `ab_head1`, `ab_para1`, `ab_head2`, `ab_para2`, `ab_point1`, `ab_point2`, `ab_point3`, `ab_point4`, `ab_head3`, `ab_para3`) VALUES
(3, 'ABOUT US', 'Welcome to Glamaura, where elegance meets expression in the world of captivating jewelry and luxurious cosmetics. Founded with a passion for redefining beauty and style, we take pride in curating a collection that mirrors the uniqueness of every individual. Our commitment to quality craftsmanship and trendsetting designs reflects our dedication to helping you make a statement that is exclusively yours. Explore the essence of sophistication and selfexpression with Glamaura where every piece tells a story of timeless allure and effortless beauty.', 'Shipments And Procedure', 'At Glamaura, we are more than just a destination for exquisite jewelry and premium cosmetics we are the embodiment of refined taste and individuality. Our curated selection reflects a commitment to empowering your distinct style journey, where every piece narrates a tale of elegance and confidence', 'Your order is meticulously processed within 24 hours of purchase, ensuring a prompt initiation of the shipping process.', 'We offer worldwide shipping, bringing the allure of our collections to your doorstep, no matter where you are.', 'Each item is carefully packaged to guarantee its safety during transit, so you receive your purchase in pristine condition', 'Stay informed with our real-time tracking system, allowing you to monitor your order journey from our boutique to your hands, providing peace of mind with every step.', 'About Our Policies And Terms and Conditions', 'Our commitment to your satisfaction extends beyond our products. Glamaura is dedicated to transparent and fair business practices. Explore our customer-friendly policies, including hasslefree returns, secure payment options, and expedited shipping. We strive to make your shopping experience as delightful as the products we offer and by engaging with Glamaura, you agree to our terms and conditions, ensuring a secure and enjoyable online shopping experience. From privacy protection to responsible usage of our platform, our terms aim to establish a mutual understanding between us and our valued customers. Read through to discover the principles that govern your interactions with Glamaura.');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `userrole` varchar(250) NOT NULL,
  `userimage` varchar(250) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `firstname`, `lastname`, `email`, `password`, `userrole`, `userimage`, `registration_date`) VALUES
(10, 'taha', 'aman', 'tahaaman26@gmail.com', '123', 'admin', '../admin/signupimg/cesar-rincon-XHVpWcr5grQ-unsplash.jpg', '2023-12-28 11:23:36'),
(12, 'fama', 'farooq', 'fatimafarooq@gmail.com', '123', 'admin', 'img/Screenshot (15).png', '2023-12-29 18:00:14'),
(13, 'fatima', 'farooq', 'fatimafarooq@gmail.com', '456', 'user', 'img/slightly-open-door-dark-room_183270-888.jpg', '2023-12-28 07:12:48');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(255) NOT NULL,
  `cat_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_name`) VALUES
(1, 'Cosmetic'),
(2, 'Jewellery');

-- --------------------------------------------------------

--
-- Table structure for table `contacttext`
--

CREATE TABLE `contacttext` (
  `head_id` int(255) NOT NULL,
  `head_1` varchar(255) NOT NULL,
  `head_p` varchar(255) NOT NULL,
  `head_2` varchar(255) NOT NULL,
  `head_add` varchar(255) NOT NULL,
  `head_mail` varchar(255) NOT NULL,
  `head_num` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contacttext`
--

INSERT INTO `contacttext` (`head_id`, `head_1`, `head_p`, `head_2`, `head_add`, `head_mail`, `head_num`) VALUES
(1, 'Get in touch', '\"Experience the elegance of handcrafted jewelry paired perfectly with exquisite makeup artistry. Reach out to us today and adorn yourself in timeless beauty.\"', 'Store ', '123 Street, New York, USA', 'info@glamaura.com', '01234567890');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `con_id` int(255) NOT NULL,
  `con_name` varchar(255) NOT NULL,
  `con_mail` varchar(255) NOT NULL,
  `con_sub` varchar(255) NOT NULL,
  `con_msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`con_id`, `con_name`, `con_mail`, `con_sub`, `con_msg`) VALUES
(2, 'fdvdgf', 'tahaaman26@gmail.com', 'bfgbfg', 'gfbfgbnfg'),
(5, 'taha', 'taha@gmail.com', 'product', 'evwrvgewtgertwe'),
(6, 'summm', 'tahaaman26@gmail.com', 'product', 'ghgfhssgjj');

-- --------------------------------------------------------

--
-- Table structure for table `homeservice`
--

CREATE TABLE `homeservice` (
  `s_id` int(255) NOT NULL,
  `s_quality` varchar(255) NOT NULL,
  `s_shipping` varchar(255) NOT NULL,
  `s_day` varchar(255) NOT NULL,
  `s_support` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `homeservice`
--

INSERT INTO `homeservice` (`s_id`, `s_quality`, `s_shipping`, `s_day`, `s_support`) VALUES
(2, 'Quality Product', 'Free Shipping', '14-Day Return', '24/7 Support');

-- --------------------------------------------------------

--
-- Table structure for table `h_card`
--

CREATE TABLE `h_card` (
  `c_id` int(255) NOT NULL,
  `c_img` varchar(1000) NOT NULL,
  `c_text` varchar(255) NOT NULL,
  `c_price` varchar(255) NOT NULL,
  `c_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `h_card`
--

INSERT INTO `h_card` (`c_id`, `c_img`, `c_text`, `c_price`, `c_desc`) VALUES
(5, 'cardimg/Bohemian Beaded Bracelet Set.jpg', 'Bohemian Beaded Bracelet Set', '$100', '\"The Bohemian Beaded Bracelet Set exudes eclectic charm with its mix of vibrant beads and intricate designs. Perfect for layering or wearing solo, these bracelets add a boho-inspired flair to any ensemble.\"'),
(6, 'cardimg/Royal Sapphire Necklace.jpg', 'Royal Sapphire Necklace', '$300', '\"The Royal Sapphire Necklace captivates with its deep blue sapphire centerpiece, surrounded by shimmering diamonds. Elegantly crafted, this necklace exudes timeless sophistication and adds a touch of regal allure to any neckline.\"'),
(7, 'cardimg/Maybelline Fit Me Matte  Poreless Foundation.jpg', 'Maybelline Fit Me Matte  Poreless Foundation', '$150', '\"The Maybelline Fit Me Matte + Poreless Foundation offers a flawless, natural matte finish while blurring imperfections. Designed for all skin types, it refines pores and provides a seamless, lightweight coverage for a refreshed complexion.\"'),
(8, 'cardimg/Urban Decay All Nighter Long-Lasting Makeup Setting Spray.jpg', 'Urban Decay All Nighter Long-Lasting Makeup Setting Spray', '$120', '\"The Urban Decay All Nighter Long-Lasting Makeup Setting Spray ensures makeup stays vibrant and fresh for up to 16 hours. Infused with temperature control technology, this weightless mist keeps your look intact, resisting smudging, fading, and settling in'),
(9, 'cardimg/Este Lauder Double Wear Stay in Place Foundation.jpg', 'Este Lauder Double Wear Stay in Place Foundation', '$230', '\"The Estée Lauder Double Wear Stay-in-Place Foundation offers a flawless, matte finish that lasts up to 24 hours. With its lightweight formula, it provides medium-to-full coverage, resisting heat, humidity, and daily wear for a radiant complexion that sta'),
(10, 'cardimg/Maybelline Lash Sensational Lengthening Mascara.jpg', 'Maybelline Lash Sensational Lengthening Mascara', '$79.00', '\"The Maybelline Lash Sensational Lengthening Mascara amplifies lashes with its unique fanning brush and liquid formula. Designed to coat each lash from root to tip, it delivers dramatic length and definition for a full-fanned effect without clumping.\"'),
(11, 'cardimg/Smashbox Photo Finish Foundation Primer.jpg', 'Smashbox Photo Finish Foundation Primer', '$199.00', '\"The Smashbox Photo Finish Foundation Primer creates a smooth canvas for makeup application, blurring imperfections and minimizing pores. Infused with vitamin E and antioxidants, this iconic primer extends the wear of foundation while providing a flawless'),
(12, 'cardimg/Anastasia Beverly Hills Amrezy Highlighter.jpg', 'Anastasia Beverly Hills Amrezy Highlighter', '$123.00', '\"Anastasia Beverly Hills Amrezy Highlighter delivers a radiant, golden shimmer for a luminous glow. Infused with ultra-fine pearls, it effortlessly enhances facial features for a dazzling, sun-kissed finish.\"');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `new_id` int(255) NOT NULL,
  `new_name` varchar(255) NOT NULL,
  `new_mail` varchar(255) NOT NULL,
  `new_register` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`new_id`, `new_name`, `new_mail`, `new_register`) VALUES
(1, 'taha', 'tahaaman26@gmail.com', '2023-12-28 08:48:07'),
(2, 'fatima', 'fatimafarooq@gmail.com', '2023-12-28 08:48:31'),
(6, 'sami', 'samigujjar@gmail.com', '2023-12-28 12:16:19');

-- --------------------------------------------------------

--
-- Table structure for table `product_items`
--

CREATE TABLE `product_items` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `image` varchar(250) NOT NULL,
  `price` varchar(250) NOT NULL,
  `product_type_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_items`
--

INSERT INTO `product_items` (`id`, `name`, `description`, `image`, `price`, `product_type_id`) VALUES
(1, 'Maybelline SuperStay Matte Ink Lipstick', 'SuperStay Matte Ink Lipstick. This highly pigmented lipstick offers a bold red shade that stays vibrant all day. The long-lasting, matte finish ensures your lips make a statement without smudging or fading. Embrace confidence and allure with this makeup essential.', 'productimages/Maybelline SuperStay Matte Ink Lipstick.jpg', ' $9', 2),
(2, 'NYX Professional Makeup Soft Matte Lip Cream', 'Achieve a soft and velvety pout with NYX Professional Makeup Soft Matte Lip Cream. This nude lipstick glides on smoothly, providing a creamy texture that feels weightless. The subtle matte finish adds a touch of sophistication to your look. Elevate your makeup game with this must-have lip essential.', 'productimages/NYX Professional Makeup Soft Matte Lip Cream.jpg', '$8.99', 2),
(3, 'Loreal Paris Colour Riche Lip Liner', ' Define and enhance your lips with precision using Loreal Paris Colour Riche Lip Liner. This deep plum lip liner is designed for effortless application, creating a flawless outline for your favorite lip color. The smooth and blendable formula ensures a seamless finish. Elevate your lip game with this essential beauty tool.', 'productimages/Loreal Paris Colour Riche Lip Liner.jpg', '$6.99', 2),
(4, 'Stila Stay All Day Waterproof Liquid Eyeliner', ' Unleash your creativity with Stila Stay All Day Waterproof Liquid Eyeliner. This jet-black eyeliner features a precise applicator for creating sharp lines that last all day. The waterproof formula ensures smudge-proof and fade-resistant wear. Elevate your eye makeup with this essential eyeliner for a bold and defined look.', 'productimages/Stila Stay All Day Waterproof Liquid Eyeliner.jpg', '$21.99', 4),
(5, 'NYX Professional Makeup Vivid Brights Eyeliner', ' Add a pop of color to your eyes with NYX Professional Makeup Vivid Brights Eyeliner. This metallic blue eyeliner offers vibrant and bold pigmentation that stands out. The precise applicator ensures easy application for creative eye looks. Elevate your eye makeup game with this playful and expressive eyeliner', 'productimages/NYX Professional Makeup Vivid Brights Eyeliner.jpg', '$16.99', 4),
(6, 'Maybelline Lash Sensational Lengthening Mascara', ' Define and lengthen your lashes with Maybelline Lash Sensational Lengthening Mascara. This mascara features a unique wand that captures and extends every lash for a fan-like effect. The formula is long-wearing and adds a touch of glamour to your eyes. Elevate your lash game with this must-have mascara.', 'productimages/Maybelline Lash Sensational Lengthening Mascara.jpg', ' $10.99', 4),
(7, 'Anastasia Beverly Hills Amrezy Highlighter', ' Illuminate your features with Anastasia Beverly Hills Amrezy Highlighter. This golden champagne highlighter offers a radiant glow for a luminous complexion. The finely milled powder blends seamlessly, enhancing your natural beauty. Elevate your makeup look with this coveted highlighter for a sun-kissed finish', 'productimages/Anastasia Beverly Hills Amrezy Highlighter.jpg', '$29.99', 5),
(8, 'Benefit Cosmetics High Beam Liquid Highlighter', 'Achieve a dewy radiance with Benefit Cosmetics High Beam Liquid Highlighter. This satin-pink highlighter provides a sheer and ethereal glow for a subtle luminosity. The lightweight formula is easy to blend, accentuating your best features. Elevate your makeup routine with this iconic liquid highlighter.', 'productimages/Benefit Cosmetics High Beam Liquid Highlighter.jpg', '$26.99', 5),
(9, 'NARS Blush', 'Add a flush of color to your cheeks with NARS Blush. This iconic peachy-pink blush offers a natural and buildable finish. The silky powder blends seamlessly, providing a healthy and radiant complexion. Elevate your makeup look with this timeless blush that complements any skin tone.', 'productimages/NARS Blush.jpg', ' $29.99', 5),
(10, 'Urban Decay All Nighter Long-Lasting Makeup Setting Spray', ' Lock in your makeup look with Urban Decay All Nighter Long-Lasting Makeup Setting Spray. This weightless setting spray ensures your makeup stays fresh and vibrant for up to 16 hours. The fine mist delivers a breathable and comfortable finish. Elevate your makeup routine with this iconic setting spray for a flawless appearance.', 'productimages/Urban Decay All Nighter Long-Lasting Makeup Setting Spray.jpg', '$32.99', 6),
(11, 'Morphe Continuous Setting Mist', ' Experience continuous freshness with Morphe Continuous Setting Mist. This mist sets and refreshes your makeup, creating a seamless and radiant finish. The ultra-fine mist distributes evenly, providing a long-lasting and luminous effect. Elevate your setting spray game with this hydrating and revitalizing option.', 'productimages/Morphe Continuous Setting Mist.jpg', '$15.99', 6),
(12, 'Smashbox Photo Finish Foundation Primer', ' Create a flawless base with Smashbox Photo Finish Foundation Primer. This iconic primer smooths and blurs imperfections, ensuring a seamless foundation application. The lightweight formula minimizes the appearance of pores and extends the wear of your makeup. Elevate your makeup routine with this essential primer for a picture-perfect finish.', 'productimages/Smashbox Photo Finish Foundation Primer.jpg', '$36.99', 6),
(13, 'Este Lauder Double Wear Stay in Place Foundation:', 'Achieve a flawless complexion with Este Lauder Double Wear Stay in Place Foundation. This long wearing foundation provides a matte finish that lasts up to 24 hours. The oil-free formula offers buildable coverage, concealing imperfections and creating a smooth canvas. Whether you are facing a busy day or a special occasion, this foundation ensures your skin looks impeccable.', 'productimages/Este Lauder Double Wear Stay in Place Foundation.jpg', '$42.99', 7),
(14, 'Maybelline Fit Me Matte  Poreless Foundation', 'Refine your skin texture with Maybelline Fit Me Matte  Poreless Foundation. This mattifying foundation is ideal for normal to oily skin, offering a seamless and natural finish. The lightweight formula blends effortlessly, providing buildable coverage for a customized look. Achieve a matte and poreless appearance with this budget friendly foundation staple.', 'productimages/Maybelline Fit Me Matte  Poreless Foundation.jpg', '$7.99', 7),
(15, 'Tarte Shape Tape Concealer', 'Conceal and brighten with Tarte Shape Tape Concealer. This cult favorite concealer offers full coverage with a luminous finish. The creamy formula effortlessly covers dark circles, blemishes, and imperfections, creating a radiant complexion. The concealer long lasting and hydrating properties make it a must have for a flawless and refreshed look.', 'productimages/Tarte Shape Tape Concealer.jpg', ' $27.99', 7),
(16, 'Elegant Emerald Necklace', 'This exquisite necklace features a stunning emerald pendant surrounded by delicate gold filigree. The chain is intricately designed to complement the elegance of the pendant, making it a perfect accessory for both formal events and everyday wear.', 'productimages/Elegant Emerald Necklace.jpg', '$299.99', 8),
(17, 'Radiant Rose Gold Earrings', ' Embrace sophistication with these rose gold earrings adorned with sparkling diamonds. The unique floral design adds a touch of femininity, making them a versatile and eye-catching addition to any outfit, from casual to formal occasions.', 'productimages/Radiant Rose Gold Earrings.jpg', ' $189.95', 9),
(18, 'Chic Leather Wrap Bracelet', 'This trendy leather wrap bracelet combines a mix of textures, featuring genuine leather and stainless steel accents. The magnetic clasp ensures a secure fit, and the versatile design allows for both casual and edgy styling, making it a must-have accessory for any fashion-forward individual.', 'productimages/Chic Leather Wrap Bracelet.jpg', ' $79.99', 10),
(19, 'Timeless Sapphire Halo Ring', 'Make a statement with this timeless sapphire halo ring. The deep blue sapphire is encircled by a halo of sparkling diamonds, creating a classic and sophisticated look. Crafted in white gold, this ring is perfect for those special moments or as a symbol of everlasting love.', 'productimages/Timeless Sapphire Halo Ring.jpg', '$499.00', 11),
(20, 'Modern Minimalist Watch', 'Elevate your wristwear with this modern minimalist watch. The sleek design features a stainless steel case and a clean, uncluttered dial. The genuine leather strap adds a touch of luxury, making it suitable for both formal and casual occasions.', 'productimages/Modern Minimalist Watch.jpg', ' $129.99', 12),
(21, 'Royal Sapphire Necklace', 'This regal necklace exudes luxury with its deep blue sapphire pendant set in a sterling silver crown. The intricate detailing of the chain adds a touch of sophistication, making it a statement piece for any formal occasion.', 'productimages/Royal Sapphire Necklace.jpg', '$349.99', 8),
(22, 'Celestial Drop Earrings', ' Shine bright with these celestial-inspired drop earrings. Featuring cascading stars in white gold and adorned with twinkling diamonds, these earrings add a touch of celestial elegance to your ensemble, perfect for both day and night.', 'productimages/Celestial Drop Earrings.jpg', '$229.95', 9),
(23, 'Bohemian Beaded Bracelet Set', 'Embrace the bohemian spirit with this set of beaded bracelets. Each bracelet is crafted with a unique combination of natural stones, creating a harmonious blend of colors and textures. Stack them together or wear them individually for a laid-back and trendy look.', 'productimages/Bohemian Beaded Bracelet Set.jpg', '$59.99', 10),
(24, 'Eternal Love Diamond Ring', 'Symbolize your eternal love with this stunning diamond ring. The band features an infinity design encrusted with sparkling diamonds, creating a timeless and romantic piece. Crafted in 14K white gold, this ring is a perfect declaration of everlasting commitment.', 'productimages/Eternal Love Diamond Ring.jpg', '$799.00', 11),
(25, 'Urban Explorer Chronograph Watch', 'For the modern adventurer, the Urban Explorer Chronograph Watch is a stylish companion. With a bold design, stainless steel case, and multiple dials for added functionality, this watch seamlessly blends fashion and utility, making it a must-have for the urban explorer.', 'productimages/Urban Explorer Chronograph Watch.jpg', ' $179.99', 12);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

CREATE TABLE `product_type` (
  `id` int(11) NOT NULL,
  `product_type` varchar(250) NOT NULL,
  `cat_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `product_type`, `cat_id`) VALUES
(2, 'lipstick & lip liner', 1),
(4, 'liner & mascara', 1),
(5, 'highlighter & blush on', 1),
(6, 'setting spray & primer', 1),
(7, 'foundation & concealer', 1),
(8, 'Necklaces', 2),
(9, 'Earrings', 2),
(10, 'Bracelets', 2),
(11, 'Rings', 2),
(12, 'Watches', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouttext`
--
ALTER TABLE `abouttext`
  ADD PRIMARY KEY (`ab_id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `contacttext`
--
ALTER TABLE `contacttext`
  ADD PRIMARY KEY (`head_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `homeservice`
--
ALTER TABLE `homeservice`
  ADD PRIMARY KEY (`s_id`);

--
-- Indexes for table `h_card`
--
ALTER TABLE `h_card`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`new_id`);

--
-- Indexes for table `product_items`
--
ALTER TABLE `product_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_type_id` (`product_type_id`);

--
-- Indexes for table `product_type`
--
ALTER TABLE `product_type`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouttext`
--
ALTER TABLE `abouttext`
  MODIFY `ab_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contacttext`
--
ALTER TABLE `contacttext`
  MODIFY `head_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `con_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `homeservice`
--
ALTER TABLE `homeservice`
  MODIFY `s_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `h_card`
--
ALTER TABLE `h_card`
  MODIFY `c_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `new_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_items`
--
ALTER TABLE `product_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `product_type`
--
ALTER TABLE `product_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `product_items`
--
ALTER TABLE `product_items`
  ADD CONSTRAINT `product_items_ibfk_1` FOREIGN KEY (`product_type_id`) REFERENCES `product_type` (`id`);

--
-- Constraints for table `product_type`
--
ALTER TABLE `product_type`
  ADD CONSTRAINT `product_type_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `product_type_ibfk_2` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`),
  ADD CONSTRAINT `product_type_ibfk_3` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
