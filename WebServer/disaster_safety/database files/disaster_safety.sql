-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 13, 2015 at 02:29 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `disaster_safety`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE IF NOT EXISTS `adminuser` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`id`, `username`, `password`) VALUES
(1, 'navneet', 'e2a4dabb85a89449dedebfe084bfef64e57e1466');

-- --------------------------------------------------------

--
-- Table structure for table `family`
--

CREATE TABLE IF NOT EXISTS `family` (
  `member_id` varchar(13) NOT NULL,
  `family_id` varchar(13) NOT NULL,
  `permission_given` tinyint(1) NOT NULL DEFAULT '0',
  KEY `member_id` (`member_id`),
  KEY `family_id` (`family_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `family`
--

INSERT INTO `family` (`member_id`, `family_id`, `permission_given`) VALUES
('+918053970992', '+919034928885', 0),
('+918053970992', '+917404959233', 1),
('+918053970992', '+919813965219', 0),
('+918053970992', '+918950683510', 1),
('+918950683510', '+919034928885', 1),
('+918950683510', '+919813965219', 1),
('+918950683510', '+917404959233', 1),
('+918950683510', '+918053970992', 1),
('+918130629829', '+919034928885', 0),
('+918130629829', '+917404959233', 0),
('+918130629829', '+919813965219', 0),
('+918130629829', '+918950683510', 0);

-- --------------------------------------------------------

--
-- Table structure for table `guidelines`
--

CREATE TABLE IF NOT EXISTS `guidelines` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `calamity` varchar(30) NOT NULL,
  `before_cal` text NOT NULL,
  `during_cal` text NOT NULL,
  `after_cal` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=19 ;

--
-- Dumping data for table `guidelines`
--

INSERT INTO `guidelines` (`id`, `calamity`, `before_cal`, `during_cal`, `after_cal`) VALUES
(1, 'Landslide', 'Gather supplies of following to evacuate:\n1.	Food\n2.	Flashlight\n3.	Battery-powered or hand-crank radio (NOAA Weather Radio, if possible)\n4.	Extra batteries\n5.	First Aid kit\n6.	Medications (7-day supply) and medical items\n7.	Multi-purpose tool\n', 'If you can, move away from the slide''s path as quickly as possible.If you cannot escape, curl into a tight ball and protect your head.If you are near a stream or channel, be alert for any sudden increase or decrease in water low and notice whether the water changes from clear to muddy. ', 'Stay away from the slide area. There may be danger of additional slides.Check for injured and trapped persons near the slide, without entering the direct slide area. '),
(2, 'Hurricane', '1. To begin preparing, you should build an emergency kit and make a family communications plan.\r\n2. Learn community hurricane evacuation routes and how to find higher ground. 3.Determine where you would go and how you would get there if you needed to evacuate.\r\n4. Cover all of your homeâ€™s windows. 5. Permanent storm shutters offer the best protection for windows. A second option is to board up windows with marine plywood, cut to fit and ready to install. Tape does not prevent windows from breaking.\r\n6. Install straps or additional clips to securely fasten your roof to the frame structure. This will reduce roof damage.\r\n7. Plan to bring in all outdoor furniture, decorations, garbage cans and anything else that is not tied down.\r\n8. If in a high-rise building, be prepared to take shelter on or below the 10th floor.\r\n', 'If a hurricane is likely in your area, you should:\r\n1. Listen to the radio or TV for information.\r\n2. Secure your home, close storm shutters and secure outdoor objects or bring them indoors.\r\n3. Turn off utilities if instructed to do so. Otherwise, turn the refrigerator thermostat to its coldest setting and keep its doors closed.\r\n4. Ensure a supply of water for sanitary purpose such as cleaning and flushing toilets. Fill the bathtub and other larger containers with water.\r\n5. Find out how to keep food safe during and after and emergency.\r\n\r\nYou should evacuate under the following conditions:\r\n1. If you are directed by local authorities to do so. Be sure to follow their instructions.\r\n2. If you live in a mobile home or temporary structure â€“ such shelter are particularly hazardous during hurricane no matter how well fastened to the ground.\r\n3. If you live in a high-rise building hurricane winds are stronger at higher elevations.\r\n4. If you live on the coast, on a floodplain, near a river, or on an island waterway.\r\n5. If you are unable to evacuate, go to your wind-safe room. If you do not have one, follow these guidelines:\r\n6. Stay indoors during the hurricane and away from windows and glass doors.\r\n7. Close all interior doors â€“ secure and brace external doors.\r\n8. Keep curtains and blinds closed. Do not be fooled if there is a lull; it could be the eye of the storm â€“ winds will pick up again.\r\n9. Take refuge in a small interior room, closet or hallway on the lowest level.\r\n10. Lie on the floor under a table or another sturdy object.\r\n11. Avoid elevators.\r\n', '1. Continue listening to a NOAA Weather Radio or the local news for the latest updates.\r\n2. Stay alert for extended rainfall and subsequent flooding even after the hurricane or tropical storm has ended.\r\n3. If you have become separated from your family, use your family communications plan or contact the FEMA National Emergency Family Registry and Locator System (NEFRLS) or the American Red Cross.\r\n4. If you evacuated, return home only when officials say it is safe.\r\n5. If you cannot return home and have immediate housing needs. Text SHELTER+ your ZIP code to 43362 (4FEMA) to find the nearest shelter in your area (example: shelter 12345).\r\n6. Drive only if necessary and avoid flooded roads and washed out bridges. \r\n7. Stay off the streets. If you must go out watch for fallen objects; downed electrical wires; and weakened walls, bridges, roads, and sidewalks.\r\n8. Keep away from loose or dangling power lines and report them immediately to the power company.\r\n9. Walk carefully around the outside your home and check for loose power lines, gas leaks and structural damage before entering.\r\n10. Stay out of any building if you smell gas, floodwaters remain around the building or your home was damaged by fire and the authorities have not declared it safe.\r\n11. Use the telephone only for emergency calls.\r\n12. NEVER use a generator inside homes, garages, crawlspaces, sheds, or similar areas, even when using fans or opening doors and windows for ventilation.\r\n'),
(3, 'Earthquake', '1. Install latches on cupboard doors to prevent them from opening during a quake.\r\n2. Use non-skid shelf liners for kitchen and bathroom cupboards, medicine cabinets, and closet shelves.\r\n3. Store heavy items or glassware in lower cabinets so they do not become dangerous projectiles.\r\n4. Update home insurance policies to adequately cover building costs, possession replacement, and injury deductibles.\r\n5. Secure large appliances such as refrigerators, water heaters, air conditioners, and other bulky items with straps, bolts, and other stabilizing methods.\r\n6. Be sure both old and new buildings meet earthquake construction requirements.\r\n7. Do not put heavy artwork, mirrors, or shelves over beds.\r\n8. Firmly secure bookcases, artwork, mounted televisions and other objects to withstand as much shaking as possible.\r\n9. Take clear photos of valuables as a record for insurance purposes.\r\n10. Prepare an earthquake emergency kit with non-perishable food, bottled water, copies of important documents (birth certificates, prescriptions, insurance papers, etc.), flashlights, first aid materials, blankets, spare glasses, and other essential items and store it where it will be easily accessible in case of a quake.\r\n11. Keep cell phones charged and replace emergency kit supplies as necessary to keep them usable.\r\n12. Plan alternative commuting routes in case an earthquake damages roads.\r\n13. Set up a family meeting location in a safe area.\r\n14. Teach all family members basic first aid, how to behave during a quake, and what to do after a quake.\r\n', 'If Shaking Begins:\r\n1. Drop down; take cover under a desk or table and hold on.\r\n2. Stay indoors until the shaking stops and you''re sure it''s safe to exit.\r\n3. Stay away from bookcases or furniture that can fall on you.\r\n4. Stay away from windows. In a high-rise building, expect the fire alarms and sprinklers to go off during a quake.\r\n5. If you are in bed, hold on and stay there, protecting your head with a pillow.\r\n6. If you are outdoors, find a clear spot away from buildings, trees, and power lines. Drop to the ground.\r\n7. If you are in a car, slow down and drive to a clear place. Stay in the car until the shaking stops.\r\n', '1. Be prepared for aftershocks, which may be stronger than the initial jolt.\r\n2. Tend injuries immediately and summon emergency assistance if necessary.\r\n3. Check for structural damage, but do not enter a building that shows damage or has visible cracks in the walls or foundation.\r\n4. Wear shoes at all times to avoid stepping on broken glass.\r\n5. Turn off gas, electricity, and water if damage is suspected or if advised to do so by authorities.\r\n6. Be cautious opening cabinets, cupboards, and closets in case items may be poised to fall.\r\n7. Keep phone lines clear for emergency use.\r\n8. Be patient: It may take hours or days to restore all services depending on the severity of the quake.'),
(4, 'Tornado', '1. Have a disaster plan. Make sure everyone knows where to go in case a tornado threatens.\r\n2. Make sure you know which county or parish you live in.\r\n3. Prepare a disaster supplies kit for your home and car. Include a first aid kit, canned food and a can opener, bottled water, battery-operated radio, flashlight, protective clothing and written instructions on how to turn off electricity, gas, and water.', '1. Go to a basement.\r\n2. If you do not have a basement, go to an interior room without windows on the lowest floor such as a bathroom or closet.\r\n3. If you can, get under a sturdy piece of furniture, like a table.\r\n4. If you live in a mobile home get out. They offer little protection against tornadoes.\r\n5. Get out of automobiles. Do not try to outrun a tornado in your car, leave it immediately.\r\n6. If youâ€™re outside, go to a ditch or low lying area and lie flat in it.\r\n7. Stay away from fallen power lines and stay out of damaged areas.\r\n8. Do not use elevators; you could be trapped in them if the power is lost.\r\n9. Do not stay in large open rooms like gyms and auditoriums.\r\n10. Do not stay around glass such as windows or skylights.\r\n11. Do not stay in mobile homes, even if they are tied down.\r\n\r\nIf youâ€™re at school during a tornado:\r\n1. Every school should have a disaster plan and have frequent drills.\r\n2. Basements offer the best protection.\r\n3. Schools without basements should use interior rooms and hallways on the lowest floor away from windows.\r\n4. Crouch down on your knees and protect your head with your arms.\r\n\r\nIf youâ€™re in a vechile during a tornado:\r\nIf the tornado is visible, far away, and the traffic is light, you may be able to drive out of its path by moving at right angles to the tornado. Otherwise, park the car as quickly and safely as possible -- out of the traffic lanes. [It is safer to get the car out of mud later if necessary than to cause a crash.] Get out and seek shelter in a sturdy building. If in the open country, run to low ground away from any cars (which may roll over on you). Lie flat and face-down, protecting the back of your head with your arms. Avoid seeking shelter under bridges, which can create deadly traffic hazards while offering little protection against flying debris.\r\nIn the open outdoors: If possible, seek shelter in a sturdy building. If not, lie flat and face-down on low ground, protecting the back of your head with your arms. Get as far away from trees and cars as you can; they may be blown onto you in a tornado.', '1. Stay indoors until it is safe to come out.\r\n2. Check for injured or trapped people, without putting yourself in danger.\r\n3. Watch out for downed power lines.\r\n4. Use a flashlight to inspect your home.\r\n'),
(16, 'Volcanic Eruptions', '1. Each one should be aware of the dangers that volcanic eruptions pose to lives and be prepared to face whatever circumstances the eruption may bring.\r\n2. Prepare all necessary things to bring once evacuation is needed. Those in danger zones are warned when to evacuate. Once given the signal refrain from saying you will be all right. Refusing to evacuate will pose more serious problems.\r\n3. Store as much food, water, light sources and batteries that are very useful in case of emergency.\r\n4. Volcanic eruptions have ash falls so be prepared for masks or anything to cover nose and mouth.\r\n5. Prioritize the safety of kids before other things. If you have relatives or friends who are far from the volcano, take your children there until such time that your place is safe.\r\n', '1. Avoid all low-lying places because lava flows and mudflows are more likely to pass here.\r\n2. Seek cover in case of ash falls rock falls.\r\n3. Use masks and cover your mouth and nose to avoid breathing in ashes.\r\n4. If you are inside a house; close all doors and windows to avoid ashes from getting inside.\r\n5. Always stay indoors.\r\n6. Stay in the evacuation center until further instructions. Do not attempt to leave the place unless told to do.\r\n7. Keep a watchful eye on the kids because they might be tempted to go out and see whatâ€™s going on outside.\r\n', '1. Go back to your house but leave the kids behind someone who can take care of them while you check your house.\r\n2. Clean everything around and check all damages incurred.\r\n3. Use masks while cleaning ash and other debris.\r\n4. Wait for further announcements related to the volcano activities.\r\n'),
(17, 'Tsunami', '1. To begin preparing, you should build an emergency kit and make a family communications plan.\r\n2. Talk to everyone in your household about what to do if a tsunami occurs. Create and practice an evacuation plan for your family. Familiarity may save your life. Be able to follow your escape route at night and during inclement weather. You should be able to reach your safe location on foot within 15 minutes. Practicing your plan makes the appropriate response more of a reaction, requiring less thinking during an actual emergency.\r\n3. If the school evacuation plan requires you to pick your children up from school or from another location. Be aware telephone lines during a tsunami watch or warning may be overloaded and routes to and from schools may be jammed.\r\n4. Knowing your community''s warning systems and disaster plans, including evacuation routes.\r\n5. Know the height of your street above sea level and the distance of your street from the coast or other high-risk waters. Evacuation orders may be based on these numbers.\r\n6. If you are a tourist, familiarize yourself with local tsunami evacuation protocols. You may be able to safely evacuate to the third floor and higher in reinforced concrete hotel structures.\r\n7. If an earthquake occurs and you are in a coastal area, turn on your radio to learn if there is a tsunami warning.\r\n', '1. Follow the evacuation order issued by authorities and evacuate immediately. Take your animals with you.\r\n2. Move inland to higher ground immediately. Pick areas 100 feet (30 meters) above sea level or go as far as 2 miles (3 kilometers) inland, away from the coastline. If you cannot get this high or far, go as high or far as you can. Every foot inland or upward may make a difference.\r\n3. Stay away from the beach. Never go down to the beach to watch a tsunami come in. If you can see the wave you are too close to escape it. CAUTION - If there is noticeable recession in water away from the shoreline this is nature''s tsunami warning and it should be heeded. You should move away immediately.\r\n4. Save yourself - not your possessions.\r\n5. Remember to help your neighbors who may require special assistance - infants, elderly people, and individuals with access or functional needs.\r\n', '1. Return home only after local officials tell you it is safe. A tsunami is a series of waves that may continue for hours. Do not assume that after one wave the danger is over. The next wave may be larger than the first one.\r\n2. Go to a designated public shelter if you have been told to evacuate or you feel it is unsafe to remain in your home. Text SHELTER + your ZIP code to 43362 to find the nearest shelter in your area.\r\n3. Avoid disaster areas. Your presence might interfere with emergency response operations and put you at further risk from the residual effects of floods.\r\n4. Stay away from debris in the water; it may pose a safety hazard to people or pets.\r\n5. Check yourself for injuries and get first aid as needed before helping injured or trapped persons.\r\n6. If someone needs to be rescued, call professionals with the right equipment to help. Many people have been killed or injured trying to rescue others.\r\n7. Help people who require special assistanceâ€”infants, elderly people, those without transportation, people with access and functional needs and large families who may need additional help in an emergency situation.\r\n8. Continue using a NOAA Weather Radio or tuning to a Coast Guard station or a local radio or television station for the latest updates.\r\n9. Stay out of any building that has water around it. Tsunami water can cause floors to crack or walls to collapse.\r\n10. Use caution when re-entering buildings or homes. Tsunami-driven floodwater may have damaged buildings where you least expect it. Carefully watch every step you take.\r\n11. To avoid injury, wear protective clothing and be cautious when cleaning up.\r\n'),
(18, 'Flood', 'Assemble disaster supplies:\r\n1. Drinking water â€“ Fill clean containers.\r\n2. Food that requires no refrigeration or cooking.\r\n3. Cash.\r\n4. Medications and first aid supplies.\r\n5. Clothing, toiletries.\r\n6. Battery-powered radio.\r\n7. Flash lights.\r\n8. Extra batteries.\r\n9. Important documents: insurance papers, medical records, bank account numbers.\r\n\r\nBe prepared to evacuate.\r\n1. Identify places to go.\r\n2. Identify alternative travel routes that are not prone to flooding.\r\n3. Plan what to do with your pets.\r\n4. Fill your carâ€™s gas tank.\r\n5. If told to leave, do so quickly.\r\n', '1. Avoid disaster areas. Your presence might hamper rescue or other emergency operations and put you at further risk.\r\n2. Watch for washed out roads, earth slides, and downed trees or power lines.\r\n3. Be especially cautious at night, when it is harder to recognize flood dangers.\r\n4. If the vehicle stalls, abandon it.\r\n5. If water rises around your car, leave the vehicle immediately. Climb to higher ground as quickly as possible.\r\n6. Do not drive around a barricade. Turn around and go another way!\r\n7. Get out of low areas that may be subject to flooding.\r\n8. Avoid already-flooded areas and do not attempt to cross flowing water.\r\n9. Stay away from power lines and electrical wires.\r\n10. Act quickly. Save yourself, not your belongings.\r\n11. Move to a safe area before access is cut off by rising water.\r\n12. Families should use only one vehicle to avoid getting separated and reduce traffic jams.\r\n13. Shut off water, gas, and electrical services before leaving.\r\n14. Secure your home: lock all doors and windows.\r\n15. If directed to a specific location, go there.\r\n16. Call 911. Call for assistance and give the correct location information.\r\n', 'Wait until it is safe to return.\r\n1. Do not visit disaster areas following a flood. Your presence may hamper urgent emergency response and rescue operations.\r\n2. Follow recommended routes. DO NOT sightsee.\r\n3. Watch for washed out roads, earth slides, and downed trees or power lines.\r\n4. Stay away from downed power lines.\r\n5. Wear sturdy shoes. The most common injury following a disaster is cut feet.\r\n6. Use ONLY battery-powered lighting. Flammable material may be present.\r\n7. Look for fire hazards (such as damaged gas lines, flooded electrical circuits, or submerged furnaces).\r\n8. Check for gas leaks. If you smell gas or hear a blowing or hissing noise, open a window and quickly leave the building. If possible turn off the gas at the outside main valve. Call the gas company.\r\n9. Report broken utility lines to appropriate authorities.\r\n10. Check for electrical system damage (sparks, broken or frayed wires, or the smell of burning insulation). Turn off the electricity at the main circuit breaker if you can reach it without stepping in water.\r\n11. Examine walls, floors, doors, windows, and ceilings for risk of collapsing.\r\n12. Watch out for animals that might have entered with the floodwaters.\r\n13. Let the building air out to remove foul odors or escaping gas.\r\n14. Take pictures of the damage, both of the building and its contents, for insurance claims.\r\n15. Get professional help.\r\n16. Seek necessary medical care. Do not neglect minor wounds or illnesses.\r\n17. Food, clothing, shelter, and first aid are available from the American Red Cross.\r\n18. If the gas has been turned off for any reason, it must be turned back on by a professional.\r\n19. Have an electrician check the electrical system and appliances.\r\n20. Wells should be pumped out and the water tested for purity before drinking.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `help`
--

CREATE TABLE IF NOT EXISTS `help` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `type_of_help` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `help`
--

INSERT INTO `help` (`id`, `latitude`, `longitude`, `type_of_help`) VALUES
(1, 28.333, 28.333, 'Hospital'),
(2, 26.44, 26.44, 'Camp'),
(5, 77, 30, 'Hospital'),
(6, 30, 77, 'Camp'),
(7, 29.94188, 76.8204, 'Hospital'),
(13, 25, 28, 'Camp'),
(14, 27.99, 76.789, 'Hospital'),
(15, 28.76, 78, 'Home'),
(16, 29.94, 76.81, 'Police Station'),
(17, 30.5416987, 76.7173805, 'Police Station'),
(18, 30.5416987, 77.7173805, 'Police Station'),
(19, 30.5416987, 75.7173805, 'Police Station'),
(20, 30.5416987, 75.7173805, 'Police Station'),
(21, 76, 29, 'hello'),
(22, 3423.34, 34.23, 'Camp2');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` varchar(13) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `latitude` double NOT NULL DEFAULT '0',
  `longitude` double NOT NULL DEFAULT '0',
  `gcm_regId` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `status`, `latitude`, `longitude`, `gcm_regId`) VALUES
('+917404959233', 'Arzoo', 1, 29.9415183, 76.8173265, 'APA91bG2ieu9PdfjOewS0xX9yQPc5UDrjo1jlaw1oTdFTYmWOsh9uQ1GbVQm-VMKD10df-4wpFW0oFxX2qt7ZIjdZ7irJKHhSxdV3c0Az4irl9AE1TpVZ5far6dlBJJP3iAfsUH0IWt4tv5sEoVhRHa1_09gLm3JbwwGKP4Pzcqg5QUCkqzD58g'),
('+918053970992', 'Puneet', 1, 29.9481684, 76.8161596, 'APA91bHyED-9t7366jIhtRElpH5Xufgg4ODRMu00SAtfQaFzX3URGeCZXRxpVFb86j0gFrt-R-a5JEQgAPEe4gxHOz3Bmz1oiSjEzwoRxelDyTNkS3os9AI-pPdqKElSxh5OyMHor-ga0b4M22cOkTB3U78bZ5fDKsYVElFrA3euhq7aSex-nfE'),
('+918130629829', 'achyut', 0, 29.9481542, 76.816135, 'APA91bG-TLYJUnAERJfMBMA2P7CRf0VDf9uo9XqV8BTgND0jFrr7KFvGraWRwhBWTVJBCLXyLg-Y5eI4lhl_cT3ZBUba2bTXC6I8DkV0JcEQvVYOBoJWe8OroeDkmsfzZfCzCu4atrYst8LPXhY1eAJWpPvM6vnLqu1UdiRMIS9mn8Squ6JqthM'),
('+918950683510', 'navne', 0, 29.9482466, 76.816035, 'APA91bFzChdKxpTvGpeh9kNxDWyBGOJGDnRSLuw3ObM-Yxp4hvNsiVD2sjCeuMA1ACUvdo2wPZeKyovyrNyqm7bTD6r98Q1z4VcoGOUacYsSFAOC5e1rk_NEQMYhAihFOpkB49ltI5enyK84LuAIblw4689AnYvRNG_RTJf-1tg2g20vj48joNc'),
('+919034928885', 'Sumit', 1, 0, 0, 'APA91bG2ieu9PdfjOewS0xX9yQPc5UDrjo1jlaw1oTdFTYmWOsh9uQ1GbVQm-VMKD10df-4wpFW0oFxX2qt7ZIjdZ7irJKHhSxdV3c0Az4irl9AE1TpVZ5far6dlBJJP3iAfsUH0IWt4tv5sEoVhRHa1_09gLm3JbwwGKP4Pzcqg5QUCkqzD58g'),
('+919813965219', 'Tarun', 1, 0, 0, 'APA91bG2ieu9PdfjOewS0xX9yQPc5UDrjo1jlaw1oTdFTYmWOsh9uQ1GbVQm-VMKD10df-4wpFW0oFxX2qt7ZIjdZ7irJKHhSxdV3c0Az4irl9AE1TpVZ5far6dlBJJP3iAfsUH0IWt4tv5sEoVhRHa1_09gLm3JbwwGKP4Pzcqg5QUCkqzD58g');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `notification` text NOT NULL,
  `info` text NOT NULL,
  `date` varchar(10) NOT NULL COMMENT 'Date of the news',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `notification`, `info`, `date`) VALUES
(1, 'Earthquake in Delhi', 'Severe earthquake in delhi shocked the whole place . It was very worst.\r\n\r\nNow what to do', '27-10-2014'),
(2, 'Earthquake in Bombay', 'Very furious earthquake in the bombay happened these days.', '27-12-2014'),
(3, 'Heavy downpour in Mumbai.Chances of flood', 'Last night rain poured down heavily in mumbai. Slums are flooded.', 'Last night');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `family`
--
ALTER TABLE `family`
  ADD CONSTRAINT `family_ibfk_1` FOREIGN KEY (`member_id`) REFERENCES `login` (`id`),
  ADD CONSTRAINT `family_ibfk_2` FOREIGN KEY (`family_id`) REFERENCES `login` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
