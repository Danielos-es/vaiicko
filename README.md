# Booklist

Daniel Striežovský

5ZYI33

## Stručný opis projektu
Cieľom projektu je vytvoriť dynamickú webovú aplikáciu určenú na prehliadanie kníh, zdieľanie používateľských recenzií a správu osobného zoznamu kníh. Aplikácia umožní návštevníkom prezerať dostupné knihy, vyhľadávať ich podľa názvu alebo autora a filtrovať ich podľa žánru. Pri jednotlivých knihách budú dostupné základné informácie, ako názov, autor, žáner, rok vydania, stručný opis a hodnotenia od ostatných používateľov.

Registrovaní používatelia budú môcť pridávať vlastné recenzie, hodnotiť knihy, upravovať alebo odstraňovať svoje recenzie a vytvárať si osobný zoznam kníh, ktoré si chcú prečítať. Súčasťou aplikácie bude aj administračná časť, prostredníctvom ktorej bude možné spravovať knižný katalóg, autorov, žánre a používateľský obsah. Hlavným účelom aplikácie je poskytnúť jednoduché miesto na objavovanie kníh a zdieľanie čitateľských skúseností.

## Role v projekte
### 1. Návštevník
Návštevník je používateľ, ktorý nemá vytvorený účet alebo nie je prihlásený. Má prístup k verejne dostupnému obsahu aplikácie.

Jeho oprávnenia zahŕňajú:
    Prehliadanie katalógu kníh
    Vyhľadávanie kníh podľa názvu alebo autora
    Filtrovanie kníh podľa žánru
    Zobrazovanie detailov kníh a publikovaných recenzií
    Registráciu a prihlásenie do aplikácie

### 2. Registrovaný používateľ
Registrovaný používateľ má vytvorený účet a je prihlásený do aplikácie. Okrem všetkých funkcií dostupných návštevníkovi môže spravovať vlastný používateľský obsah.

Jeho oprávnenia zahŕňajú:
    Pridávanie recenzií a hodnotení ku knihám
    Úpravu a mazanie vlastných recenzií
    Pridávanie kníh do osobného zoznamu na prečítanie a ich odstraňovanie z tohto zoznamu
    Prehliadanie a správu vlastných recenzií a uložených kníh
    Úpravu základných údajov svojho používateľského účtu

Každý používateľ môže upravovať a mazať iba vlastné recenzie a spravovať iba svoj osobný zoznam kníh.

### 3. Administrátor
Administrátor zodpovedá za správu obsahu aplikácie a dohľad nad jej používaním.

Jeho oprávnenia zahŕňajú:
    Pridávanie, zobrazovanie, úpravu a mazanie kníh.
    Správu autorov a žánrov.
    Odstraňovanie nevhodných recenzií.
    Správu používateľských účtov vrátane deaktivácie účtu.
    Zobrazovanie základných štatistík aplikácie.

Administrátor má prístup k administračnej časti aplikácie, ktorá je dostupná iba po prihlásení používateľa s príslušnými oprávneniami.

## Prípady použitia podľa rolí
### Návštevník
Zobrazí zoznam dostupných kníh
Vyhľadá knihu podľa názvu alebo autora
Vyfiltruje knihy podľa žánru
Zobrazí detail vybranej knihy
Prečíta si recenzie a hodnotenia ostatných používateľov
Vytvorí si používateľský účet alebo sa prihlási

### Registrovaný používateľ
Vytvorí a upraví vlastnú recenziu knihy
Ohodnotí knihu na stupnici od 1 do 10
Odstráni svoju recenziu
Pridá knihu do osobného zoznamu na prečítanie
Odstráni knihu zo svojho zoznamu
Zobrazí si vlastné recenzie a uložené knihy
Upraví údaje svojho účtu a odhlási sa z aplikácie

### Administrátor
Pridá novú knihu do katalógu
Upraví alebo odstráni existujúcu knihu
Spravuje autorov a žánre
Zobrazí zoznam používateľských recenzií a odstráni nevhodný obsah
Zobrazí zoznam používateľov a spravuje ich účty
Zobrazí základné štatistiky, napríklad počet kníh, používateľov a recenzií

## Plánované entity
### 1. Kniha (Book)
Predstavuje knihu evidovanú v katalógu aplikácie.

Hlavné atribúty:
    ID knihy
    Názov
    ID autora
    ID žánru
    Rok vydania
    Stručný opis
    Cesta k obrázku obálky

Každá kniha patrí jednému autorovi a jednému žánru. Kniha môže mať viacero používateľských recenzií a môže byť uložená v zoznamoch na prečítanie viacerých používateľov.

### 2. Autor (Author)
Predstavuje autora jednej alebo viacerých kníh.

Hlavné atribúty:
    ID autora
    Meno a priezvisko
    Stručný životopis

Jeden autor môže mať v katalógu evidovaných viacero kníh.

### 3. Žáner (Genre)
Slúži na kategorizáciu kníh podľa ich literárneho zamerania.

Hlavné atribúty:
    ID žánru
    Názov žánru
    Stručný opis

Jeden žáner môže byť priradený viacerým knihám. Žánre bude spravovať administrátor.

### 4. Recenzia (Review)
Predstavuje používateľské hodnotenie a textovú recenziu konkrétnej knihy.

Hlavné atribúty:
    ID recenzie
    ID knihy
    ID používateľa
    Číselné hodnotenie od 1 do 10
    Text recenzie
    Dátum vytvorenia
    Dátum poslednej úpravy

Každá recenzia patrí jednej knihe a jednému používateľovi. Jeden používateľ môže vytvoriť recenzie viacerých kníh, pričom na jednu knihu môže mať najviac jednu recenziu.

### 5. Položka zoznamu na prečítanie (ReadingListEntry)
Predstavuje knihu uloženú v osobnom zozname používateľa.

Hlavné atribúty:
    ID položky
    ID používateľa
    ID knihy
    Dátum pridania

Táto entita umožňuje používateľom vytvárať si vlastné zoznamy kníh, ktoré si plánujú prečítať. Rovnaká kniha môže byť uložená v zoznamoch viacerých používateľov.

### Používateľ (User)
Aplikácia bude obsahovať aj používateľskú entitu zabezpečujúcu prihlasovanie a autorizáciu. 

Hlavné atribúty:
    ID používateľa
    používateľské meno
    zahashované heslo
    rola používateľa

## Vzťahy medzi entitami
**Autor – Kniha (1):** Jeden autor môže mať viacero kníh, pričom každá kniha má v základnej verzii jedného autora.

**Žáner – Kniha (1):** Jeden žáner môže obsahovať viacero kníh, pričom každá kniha patrí do jedného žánru.

**Kniha – Recenzia (1):** Jedna kniha môže mať viacero recenzií, pričom každá recenzia sa vzťahuje na jednu knihu.

**Používateľ – Recenzia (1):** Jeden používateľ môže napísať viacero recenzií, pričom každá recenzia má jedného autora.

**Používateľ – Kniha (M):** Používateľ si môže uložiť viacero kníh do svojho zoznamu na prečítanie a každá kniha môže byť uložená viacerými používateľmi. Tento vzťah bude realizovaný prostredníctvom entity Položka zoznamu na prečítanie.

## Hlavné stránky aplikácie
1. **Domovská stránka** – Zobrazí výber kníh, najnovšie recenzie a základné informácie o aplikácii.
2. **Katalóg kníh** – Umožní prehliadanie, vyhľadávanie, filtrovanie a stránkovanie kníh.
3. **Detail knihy** – Zobrazí informácie o knihe, obálku, priemerné hodnotenie a používateľské recenzie.
4. **Prihlásenie a registrácia** – Umožní vytvorenie účtu a prihlásenie do aplikácie.
5. **Používateľský profil** – Zobrazí vlastné recenzie a zoznam uložených kníh a umožní úpravu údajov účtu.
6. **Formulár recenzie** – Umožní pridanie novej recenzie alebo úpravu existujúcej recenzie.
7. **Administrácia kníh** – Umožní administrátorovi vytvárať, zobrazovať, upravovať a odstraňovať knihy vrátane správy obrázkov obálok.
8. **Administrácia autorov a žánrov** – Umožní správu autorov a žánrov vrátane všetkých základných CRUD operácií.
9. **Správa recenzií a používateľov** – Umožní administrátorovi kontrolovať používateľský obsah a spravovať používateľské účty.

## Rozdelenie funkcionality
### Základné funkcie
- Registrácia, prihlasovanie a odhlasovanie používateľov.
- Rozlíšenie návštevníka, registrovaného používateľa a administrátora.
- Zobrazovanie katalógu kníh a detailov jednotlivých kníh.
- Vyhľadávanie kníh podľa názvu alebo autora a filtrovanie podľa žánru.
- Pridávanie, úprava a mazanie kníh administrátorom.
- Kompletné CRUD operácie nad knihami a žánrami.
- Správa autorov prostredníctvom administračnej časti.
- Pridávanie, zobrazovanie, úprava a mazanie vlastných recenzií.
- Hodnotenie kníh na stupnici od 1 do 10.
- Správa osobného zoznamu kníh na prečítanie.
- Nahrávanie a správa obrázkov obálok kníh.
- Asynchrónne filtrovanie katalógu a odosielanie recenzií pomocou AJAX.
- Kontrola používateľských vstupov na strane klienta aj servera.
- Zabezpečenie aplikácie, kontrola oprávnení a bezpečná práca s databázou.
- Responzívne používateľské rozhranie.
- Spustenie aplikácie pomocou Dockeru a automatické vytvorenie databázy s ukážkovými údajmi pri prvom spustení.

### Rozširujúce funkcie
- Nahrávanie profilovej fotografie používateľa.
- Triedenie kníh podľa priemerného hodnotenia alebo roku vydania.
- Zobrazenie najlepšie hodnotených kníh.
- Rozšírené štatistiky počtu kníh a používateľských recenzií.
- Označovanie recenzií na kontrolu administrátorom.
- Rozšírená validácia formulárov a používateľsky prívetivejšie upozornenia.
