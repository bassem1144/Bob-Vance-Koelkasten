DROP
    DATABASE IF EXISTS `bob_vance`;
CREATE DATABASE `bob_vance`; USE
    `bob_vance`;
CREATE TABLE `koelkasten`(
    id MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    artikel_nummer VARCHAR(100) NOT NULL,
    prijs INT NOT NULL,
    rating DECIMAL(2, 1) NULL,
    beschrijving TEXT NOT NULL,
    image_url VARCHAR(100) NOT NULL,
    energie_label VARCHAR(10) NOT NULL,
    afmetingen VARCHAR(100) NOT NULL,
    staat ENUM('nieuw', 'tweedehands') NOT NULL
); INSERT INTO `koelkasten`(
    `artikel_nummer`,
    `prijs`,
    `rating`,
    `beschrijving`,
    `image_url`,
    `energie_label`,
    `afmetingen`,
    `staat`
)
VALUES(
    'SAMSUNG RB36T600DSA',
    499,
    4.8,
    'De Samsung RB36T600DSA is een vrijstaande koelvriescombinatie met 360 liter inhoud: 248 liter in het koelgedeelte en 112 liter in het vriesgedeelte. De SpaceMax-technologie zorgt voor dunne en optimaal geïsoleerde wanden. Op deze manier heb je meer ruimte in de koelkast, zonder dat de grootte of het energieverbruik toeneemt. Deze koelkast staat mooi in elk interieur door het strakke en stijlvolle design.',
    'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_77488541/fee_786_587_png',
    'D',
    '59.5 cm x 194 cm x 66 cm',
    'nieuw'
),(
    'BOSCH KGE39ALCA Vitafresh',
    649,
    4.7,
    'De Bosch KGE39ALCA is een vrijstaande koel-vriescombinatie met een totale inhoud van 343 liter. Door de twee aparte koelcircuits worden geuren niet overgedragen van de koelkast naar de vriezer en omgedraaid. Ook is de temperatuur van de koel-envriesgedeeltes hierdoor apart regelbaar. De koelkast is voorzien van 5 plateaus waarvan 4 uitschuifbaar zijn en 2 in hoogte verstelbaar. ',
    'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_77488541/fee_786_587_png',
    'B',
    '59.5 cm x 194 cm x 66 cm',
    'nieuw'
),(
    'HAIER HTF-520IP7',
    99,
    4.8,
    'De Samsung RB36T600DSA is een vrijstaande koelvriescombinatie met 360 liter inhoud: 248 liter in het koelgedeelte en 112 liter in het vriesgedeelte. De SpaceMax-technologie zorgt voor dunne en optimaal geïsoleerde wanden. Op deze manier heb je meer ruimte in de koelkast, zonder dat de grootte of het energieverbruik toeneemt. Deze koelkast staat mooi in elk interieur door het strakke en stijlvolle design.',
    'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_77488541/fee_786_587_png',
    'D',
    '59.5 cm x 194 cm x 66 cm',
    'nieuw'
),(
    'INVENTUM KV1781R',
    99,
    4.8,
    'De Samsung RB36T600DSA is een vrijstaande koelvriescombinatie met 360 liter inhoud: 248 liter in het koelgedeelte en 112 liter in het vriesgedeelte. De SpaceMax-technologie zorgt voor dunne en optimaal geïsoleerde wanden. Op deze manier heb je meer ruimte in de koelkast, zonder dat de grootte of het energieverbruik toeneemt. Deze koelkast staat mooi in elk interieur door het strakke en stijlvolle design.',
    'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_77488541/fee_786_587_png',
    'D',
    '59.5 cm x 194 cm x 66 cm',
    'nieuw'
),(
    'SAMSUNG RB36T600DSA',
    99,
    4.8,
    'De Samsung RB36T600DSA is een vrijstaande koelvriescombinatie met 360 liter inhoud: 248 liter in het koelgedeelte en 112 liter in het vriesgedeelte. De SpaceMax-technologie zorgt voor dunne en optimaal geïsoleerde wanden. Op deze manier heb je meer ruimte in de koelkast, zonder dat de grootte of het energieverbruik toeneemt. Deze koelkast staat mooi in elk interieur door het strakke en stijlvolle design.',
    'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_77488541/fee_786_587_png',
    'D',
    '59.5 cm x 194 cm x 66 cm',
    'nieuw'
),(
    'SAMSUNG RB36T600DSA',
    99,
    4.8,
    'De Samsung RB36T600DSA is een vrijstaande koelvriescombinatie met 360 liter inhoud: 248 liter in het koelgedeelte en 112 liter in het vriesgedeelte. De SpaceMax-technologie zorgt voor dunne en optimaal geïsoleerde wanden. Op deze manier heb je meer ruimte in de koelkast, zonder dat de grootte of het energieverbruik toeneemt. Deze koelkast staat mooi in elk interieur door het strakke en stijlvolle design.',
    'https://assets.mmsrg.com/isr/166325/c1/-/ASSET_MMS_77488541/fee_786_587_png',
    'D',
    '59.5 cm x 194 cm x 66 cm',
    'nieuw'
);