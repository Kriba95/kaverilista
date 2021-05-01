#410 JavaScript: Kaverilista 1 Projektit JavaScript: Kaverilista Osaamiset Projektin valinnan peruuttaminen Olet jo merkinnyt tämän projektin valituksi.

Kuvaus Toteuta www-selaimella käytettävä sovellus, josta on kaksi erillaista versiota. Käytä molemmissa versioissa kaverien nimien tallentamiseen taulukkorakennetta (Array) ja siihen liittyviä metodeja, joiden avulla voit käsitellä (lisätä, poistaa, järjestää) taulukon sisältämiä elementtejä.

versiossa käyttäjältä kysytään kymmenen kaverin nimet ja tulostetaan ne näytölle.

versiossa käyttäjällä on monipuolisempi käyttöliittymä, jonka avulla hän voi lisätä kavereita automaattisesti päivittyvään listaan. Kavereita voi poistaa ja listan voi lajitella.

Tee suunnitelma, jossa jaat kokonaisuuden osatehtäviin.

käyttöliittymän toteutus, css-tyylittely, javascript-koodaus, testaus tms. 2. Arvioi kuinka paljon aikaa menee kunkin tehtävän toteuttamiseen ja koko projektin toteutukseen.

Julkaise sivut koulun www-palvelimelle omaan kansioosi. Tai vaihtoehtoisesti voit käyttää omaa www-palvelinta tai web-hotellia, jos sinulla on sellainen.

Muista seurata työaikaasi tehtäväkohtaisesti.

Laadi PowerPoint esitys, jossa esittelet projektin. Kerro esityksessä omilla sivuillaan:

mitkä olivat tavoitteesi, miten saavutit ne, mitä ongelmia ilmeni ja mitä uutta opit projektia tehdessäsi. 6. Huolehdi siitä, että projektiin liittyvät dokumentit (suunnitelma, työajanseuranta, PowerPoint-esitys) löytyvät OneDrivestä, projekti löytyy omilta www-sivuiltasi.

#kesto n. 4h

Kaverilista versio 1

Kaverilista joka tallentaa nimet MySql tietokantaan.

JavaScripti on näennäis skripti joka ei fyysisesti tallenna mitään tietokantaan vaan pelkästään väliaikaisesti käyttäjän selaimeen.

PHP (uusi versio 7.*)koodi on se joka tallentaa tiedostot MySql tietokantaan.

Tyylittelyyn on käytetty nopeasti väännettyä css/html koodia, joka ei ole responsiivinen mobiililaitteella mutta "pitäisi" toimia jokaisessa selaimessa mukaan lukie Internet Explorer,.

Phpmyadmin tunnukset ovat piilotettu mutta vastaavanlainen tiedosto löytyy connection-funky.php tiedostosta.

MySql tietokantaa on rajttu siten että käyttäjällä on mahdollisuus lisätä max 10-20 merkkiä.

Jos php hyökkäyksiä esiintyy, rajaan merkistöt A-Z-Ö ja käyttäisin Robot captcha:aa, toistaiseksi ei ole tarvetta koska sivut ovat alipalvelimeen asennettu ja se käyttää omaa MySql tietokantaa.

Mahdolliseti jätän turva-systeemit tälläiseksi, jotta näkisin mitä hyökkäys keinoja mahdollisesti hakkeri käyttää (Jos nään). En missään nimessä käyttäisi tätä lista-systeemiä asiakkaiden/käyttäjän web-palvelimella.

#kesto 8-16h

Kaverilista versio 2

Se on tulossa.

Koska versio 1 käyttää PHP:eetä haluan tehdä "Session/cookie" rekistöröinti menetelmän jotta käyttäjä voisi jatkossa ns. kirjautua ja poistaa oman lisäämän nimen listasta.