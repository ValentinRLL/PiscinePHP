SELECT COUNT(`date`) AS 'film' FROM `member_history` WHERE `date` BETWEEN '2006-10-30 00:00:00' AND '2007-07-27 23:59:59' OR (MONTH(`date`) = 12 AND DAY(`date`) = 24);