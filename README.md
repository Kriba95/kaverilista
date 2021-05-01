
Kaverilista versio 1

Kaverilista joka tallentaa nimet MySql tietokantaan. JavaScripti on näennäis skripti joka ei fyysisesti tallenna mitään tietokantaan vaan pelkästään väliaikaisesti käyttäjän selaimeen. PHP koodi on se joka tallentaa tiedostot MySql tietokantaan. Tyylittelyyn on käytetty nopeasti väännettyä css/html koodia, joka ei ole responsiivinen mobiililaitteella mutta "pitäisi" toimia jokaisessa selaimessa mukaan lukie Internet Explorer,. Phpmyadmin tunnukset ovat piilotettu mutta vastaavanlainen tiedosto löytyy connection-funky.php tiedostosta.

MySql tietokantaa on rajttu siten että käyttäjällä on mahdollisuus lisätä max 10-20 merkkiä.

Jos php hyökkäyksiä esiintyy, rajaan merkistöt A-Z-Ö ja käyttäisin Robot captcha:aa, toistaiseksi ei ole tarvetta koska sivut ovat alipalvelimeen asennettu ja se käyttää omaa MySql tietokantaa.

Mahdolliseti jätän turva-systeemit tälläiseksi, jotta näkisin mitä hyökkäys keinoja mahdollisesti hakkeri käyttää (Jos nään). En missään nimessä käyttäisi tätä lista-systeemiä asiakkaiden/käyttäjän web-palvelimella.

#kesto 8-16h

Kaverilista versio 2

Se on tulossa.

Koska versio 1 käyttää PHP:eetä haluan tehdä "Session/cookie" rekistöröinti menetelmän jotta käyttäjä voisi jatkossa ns. kirjautua ja poistaa oman lisäämän nimen listasta.