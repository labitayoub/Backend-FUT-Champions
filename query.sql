INSERT INTO Club (club, logo) VALUES
('Inter Miami', 'https://cdn.sofifa.net/meta/team/239235/120.png'),
('Al Nassr', 'https://cdn.sofifa.net/meta/team/2506/120.png'),
('Manchester City', 'https://cdn.sofifa.net/players/239/085/25_120.png'),
('Real Madrid', 'https://cdn.sofifa.net/meta/team/3468/120.png'),
('Liverpool', 'https://cdn.sofifa.net/meta/team/8/120.png'),
('Al-Hilal', 'https://cdn.sofifa.net/meta/team/7011/120.png'),
('Bayern Munich', 'https://cdn.sofifa.net/meta/team/503/120.png'),
('Atletico Madrid', 'https://cdn.sofifa.net/meta/team/7980/120.png'),
('Al-Ittihad', 'https://cdn.sofifa.net/meta/team/476/120.png'),
('Manchester United', 'https://cdn.sofifa.net/meta/team/14/120.png'),
('Paris Saint-Germain', 'https://cdn.sofifa.net/meta/team/591/120.png'),
('Fenerbahçe', 'https://cdn.sofifa.net/meta/team/88/120.png'),
('PSV', 'https://cdn.sofifa.net/meta/team/682/120.png');

INSERT INTO Nationality (nationality, flag) VALUES
('Argentina', 'https://cdn.sofifa.net/flags/ar.png'),
('Portugal', 'https://cdn.sofifa.net/flags/pt.png'),
('Belgium', 'https://cdn.sofifa.net/flags/be.png'),
('France', 'https://cdn.sofifa.net/flags/fr.png'),
('Netherlands', 'https://cdn.sofifa.net/flags/nl.png'),
('Germany', 'https://cdn.sofifa.net/flags/de.png'),
('Brazil', 'https://cdn.sofifa.net/flags/br.png'),
('Egypt', 'https://cdn.sofifa.net/flags/eg.png'),
('Slovenia', 'https://cdn.sofifa.net/flags/si.png'),
('Croatia', 'https://cdn.sofifa.net/flags/hr.png'),
('Norway', 'https://cdn.sofifa.net/flags/no.png'),
('Canada', 'https://cdn.sofifa.net/flags/ca.png'),
('Morocco', 'https://cdn.sofifa.net/flags/ma.png'),
('Italy', 'https://cdn.sofifa.net/flags/it.png'),
('England', 'https://cdn.sofifa.net/flags/gb-eng.png');

INSERT INTO Players (name, photo,position, rating, nationality_id, club_id) VALUES
('Lionel Messi', 'https://cdn.sofifa.net/players/158/023/25_120.png', 'RW', 93, 1, 1),
('Cristiano Ronaldo', 'https://cdn.sofifa.net/players/020/801/25_120.png', 'ST', 91, 2, 2),
('Kevin De Bruyne', 'https://cdn.sofifa.net/players/192/985/25_120.png', 'CM', 91, 3, 3),
('Kylian Mbappé', 'https://cdn.sofifa.net/players/231/747/25_120.png', 'ST', 92, 4, 4),
('Virgil van Dijk', 'https://cdn.sofifa.net/players/203/376/25_120.png', 'RB', 90, 5, 5)
;
INSERT INTO Normal_Player (pace, shooting, passing, dribbling, defending, physical, players_id) VALUES
(85, 92, 91, 95, 35, 65, 1),
(84, 94, 82, 87, 34, 77, 2),
(74, 86, 93, 88, 64, 78, 3)
;
INSERT INTO GK_Player (diving, handling, kicking, reflexes, speed, positioning, players_id) VALUES
(89, 90, 78, 92, 50, 88, 4),
(88, 84, 75, 90, 50, 85, 2);