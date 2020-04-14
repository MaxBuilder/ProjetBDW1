CREATE TABLE IF NOT EXISTS `Categorie` (
	`catId` INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
	`nomCat`	VARCHAR (100)
);
CREATE TABLE IF NOT EXISTS `utilisateur` (
	`utilID` INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
	`pseudo`	VARCHAR (100),
	`mdp` VARCHAR(100)
);
CREATE TABLE IF NOT EXISTS `Photo` (
	`photoId`	INTEGER PRIMARY KEY NOT NULL AUTO_INCREMENT,
	`nomFich`	VARCHAR (100),
	`description`	VARCHAR (250),
	`catId`	INTEGER,
	`utilID` INTEGER,
	FOREIGN KEY(`utilID`) REFERENCES `utilisateur`(`utilID`),
	FOREIGN KEY(`catId`) REFERENCES `Categorie`(`catId`)
);

INSERT INTO `Categorie` (`catId`, `nomCat`) VALUES ('1', 'Animal');
INSERT INTO `Categorie` (`catId`, `nomCat`) VALUES ('2', 'Nourriture');
INSERT INTO `Categorie` (`catId`, `nomCat`) VALUES ('3', 'Gens');
INSERT INTO `Categorie` (`catId`, `nomCat`) VALUES ('4', 'Monument');
INSERT INTO `Categorie` (`catId`, `nomCat`) VALUES ('5', 'Paysage');

INSERT INTO `utilisateur` (utilID,pseudo,mdp) VALUES ('1','admin','21232f297a57a5a743894a0e4a801fc3');
