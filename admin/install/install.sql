--
-- $Id: install.sql 1 2010-01-23 16:43:49Z deutz $
-- RD_DOWNLOAD by Robert Deutz Business Solution www.rdbs.de
--

CREATE TABLE IF NOT EXISTS `#__rd_download` (
  `id` int(11) NOT NULL auto_increment,
  `text` text character set utf8 NOT NULL,
  `filename` varchar(100) character set utf8 NOT NULL,
  `klicks` varchar(9) character set utf8 NOT NULL,
  `published` tinyint(1) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 ;
