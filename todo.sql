DROP DATABASE IF EXISTS todo;
CREATE DATABASE todo;
USE todo;

DROP TABLE IF EXISTS lists;
CREATE TABLE lists(
	id INT NOT NULL AUTO_INCREMENT,
	name varchar(255) NOT NULL,
	PRIMARY KEY (id)
);

DROP TABLE IF EXISTS listPoints;
CREATE TABLE listPoints(
	id INT NOT NULL AUTO_INCREMENT,
	listid INT NOT NULL,
	text VARCHAR(255) NOT NULL DEFAULT "",
	status BOOLEAN NOT NULL DEFAULT FALSE,
	PRIMARY KEY (id),
	FOREIGN KEY (listid)
		REFERENCES lists(id)
		ON UPDATE CASCADE
		ON DELETE CASCADE
);

INSERT INTO lists
VALUES
(1, "Project_toDo"),
(2, "MySQL"),
(3, "Movies");

INSERT INTO listPoints(listid, text, status)
VALUES
(1, "create view for select lists and list_items", TRUE),
(1, "list_item set status by default false;", TRUE),
(1, "when list update id, then update list_items listid", TRUE),
(1, "when delete list, delete list_items", TRUE),
(1, "return to the previous position when refreshing the page", FALSE);

INSERT INTO listPoints(listid, text, status)
VALUES
(2, "Functions", FALSE),
(2, "Triggers", TRUE),
(2, "Views", TRUE);

INSERT INTO listPoints(listid, text, status)
VALUES
(3, "The Lion King", TRUE),
(3, "Doctor who / The day of the doc", FALSE),
(3, "The Tao of Steve", FALSE),
(3, "I'm Legend 2", FALSE);


CREATE VIEW lists_and_listPoints AS
SELECT listPoints.id, listid, name, text, status FROM lists INNER JOIN listPoints ON listPoints.listid = lists.id;