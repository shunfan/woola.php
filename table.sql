# ************************************************************
# Woola SQL
# Github: https://github.com/Perrydu/Woola
# ************************************************************

CREATE TABLE `redirect` (
  `short_url` varchar(14) COLLATE utf8_unicode_ci NOT NULL,
  `original_url` varchar(620) COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `hits` bigint(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`short_url`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Powered by Woola';