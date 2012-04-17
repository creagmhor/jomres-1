<?php
/**
* Core file
* @author Vince Wooll <sales@jomres.net>
* @version Jomres 6
* @package Jomres
* @copyright	2005-2012 Vince Wooll
* Jomres is currently available for use in all personal or commercial projects under both MIT and GPL2 licenses. This means that you can choose the license that best suits your project, and use it accordingly. 
**/
##################################################################
defined( '_JOMRES_INITCHECK' ) or die( '' );
##################################################################
define('_JOMRES_COM_MR_QUICKRESDESC','Bezpośrednia rezerwacja');
define('_JOMRES_COM_MR_SHOWPROFILES','Pokaż i ustaw użytkowników');
define('_JOMRES_COM_MR_QUICK______DESC','Zostawić puste');
define('_JOMRES_COM_MR_GENERALCONFIGDESC','Ustawienia Systemowe');
define('_JOMRES_COM_MR_BACK','Wróć');
define('_JOMRES_COM_MR_YES','Tak');
define('_JOMRES_COM_MR_NO','Nie');
define('_JOMRES_COM_MR_NEWTARIFF','Nowe');
define('_JOMRES_COM_MR_NEWPROPERTY','Nowy obiekt');
define('_JOMRES_COM_MR_NEWPROPERTYFEATURE','Nowe cechy obiektu');
define('_JOMRES_COM_MR_NEWGUEST','Nowy gość');
define('_JOMRES_COM_MR_SAVE','Zapisz');
// Reserwacje - wglad
define('_JOMRES_COM_MR_VIEWBOOKINGS_SURNAME','Nazwisko');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL','Data przyjazdu');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE','Data odjazdu');
define('_JOMRES_COM_MR_VIEWBOOKINGS_BLANK','Puste');
define('_JOMRES_COM_MR_ASSIGNUSER_TITLE','Prawa dostępu dla użytkownika');
define('_JOMRES_COM_MR_ASSIGNUSER_ID','ID');
define('_JOMRES_COM_MR_ASSIGNUSER_NAME','Nazwa użytkownika');
define('_JOMRES_COM_MR_ASSIGNUSER_USERNAME','Imię i nazwisko');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDHOTELUSER','aktualnie autoryzowany');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDDEFAULTHOTEL','Obiekt domyślny');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDCHANGETHIS','zmień');
define('_JOMRES_COM_MR_ASSIGNUSER_AUTHORISEDACCESSLEVEL','Prawa dostępu');
define('_JOMRES_COM_MR_ASSIGNUSER_USERMODIFIEDMESAGE','Użytkownik zmieniony');
define('_JOMRES_COM_MR_ASSIGNUSER_NOTAPPLICABLE','nie wymagane');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_RECEPTION','Recepcja');
define('_JOMRES_COM_MR_ASSIGNUSER_LEVEL_ADMIN','Administrator obiektu');
// Edycja rezerwacji
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_TITLE','Rezerwacje-Administracja');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_NEWBOOKINGS','Nowe rezerwacje (nie zapłacone)');
define('_JOMRES_COM_MR_EDITBOOKINGTITLE','Zmień rezerwację dla ');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ARRIVAL','przyjazd/wyjazd');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_GUEST','Gość');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_ROOM','Pokój');
define('_JOMRES_COM_MR_EDITBOOKING_TAB_PAYMENT','Płatności');
define('_JOMRES_COM_MR_EB_ARRIVALFIRSTNAME_EXPL','Imię');
define('_JOMRES_COM_MR_EB_ARRIVALSURNAME_EXPL','Nazwisko');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ','Specjalne wymagania');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGSPECIALREQ_DISCLAIMER','Uwaga! Prosimy zauważyć, że niektóre Specjalne wymagania związane są z dodatkowymi kosztami.');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_CANCELBOOKING','Anulacja Rezerwacji');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_TOWN_EXPL','Miasto');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Kod pocztowy');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefon komórkowy');
define('_JOMRES_COM_MR_EB_GUEST_JOMRES_EMAIL_EXPL','E-Mail');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_ALREADYBOOKEDIN','Rezerwacja nie może zostać anulowana, gość już przyjechał.');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_NODEPOSIT','Anuluj rezerwację.');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLATION_BUTTON','Potwierdź anulację');
define('_JOMRES_COM_MR_EB_GUEST_CANCELLED','Rezerwacja anulowana.');
define('_JOMRES_COM_MR_EB_GUEST_DAYSTOARRIVAL','Dni do przyjazdu');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_EXPL','Rodzaj rezerwacji');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_BLACK','Wyłączenie');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_RECEPTION','Recepcja');
define('_JOMRES_COM_MR_EB_ROOM_BOOKINGTYPE_INTERNET','Internet');
define('_JOMRES_COM_MR_EB_ROOM_NAME','Nazwa pokoju');
define('_JOMRES_COM_MR_EB_ROOM_NUMBER','Nr pokoju');
define('_JOMRES_COM_MR_EB_ROOM_FLOOR','Piętro');
define('_JOMRES_COM_MR_EB_ROOM_DISABLED','Pokój dla niepełnosprawnych?');
define('_JOMRES_COM_MR_EB_ROOM_MAXPEOPLE','Maksymalna ilość gości');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_ABBV','Kategoria pokoju');
define('_JOMRES_COM_MR_EB_ROOM_CLASS_DESC','Opis kategorii pokoju');
define('_JOMRES_COM_MR_EB_ROOM_FEATURES_LIST','Lista cech pokoi');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID','Przedpłata dokonana');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_PAID_UPDATE','Wpisz przedpłatę');
define('_JOMRES_COM_MR_EB_PAYM_CONTRACT_TOTAL','Wartość rezerwacji');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSIT_REF','uwagi dot. przedpłaty');
define('_JOMRES_COM_MR_EB_PAYM_BOOKINGNUMBER','Nr rezerwacji');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITREQUIRED','Przedpłata');
define('_JOMRES_COM_MR_EB_PAYM_DEPOSITSAVEMESSAGE','Przedpłata zapisana');
// Edit Language
define('_JOMRES_COM_MR_QUICKRES_STEP2_TITLE','Wolne pokoje w tym czasie');
define('_JOMRES_COM_MR_QUICKRES_STEP2_PROPERTYNAME','Obiekt');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMTYPE','Rodzaj pokoju');
// Formularze dla gosci
define('_JOMRES_COM_MR_DISPGUEST_EDITDETAILS','Edytuj dane');
define('_JOMRES_COM_MR_DISPGUEST_FIRSTNAME','Imię');
define('_JOMRES_COM_MR_DISPGUEST_SURNAME','Nazwisko');
define('_JOMRES_COM_MR_DISPGUEST_HOUSE','Nr domu');
define('_JOMRES_COM_MR_DISPGUEST_STREET','Ulica');
define('_JOMRES_COM_MR_DISPGUEST_TOWN','Miasto');
define('_JOMRES_COM_MR_DISPGUEST_POSTCODE','Kod pocztowy');
define('_JOMRES_COM_MR_DISPGUEST_LANDLINE','Telefon');
define('_JOMRES_COM_MR_DISPGUEST_MOBILE','Telefon komórkowy');
define('_JOMRES_COM_MR_DISPGUEST_FAX','Fax');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNO','Numer karty kredytowej.');
define('_JOMRES_COM_MR_DISPGUEST_CCARDISS','ważna od');
define('_JOMRES_COM_MR_DISPGUEST_CCARDEXPIRE','ważna do');
define('_JOMRES_COM_MR_DISPGUEST_CCARISSNO','wydana dn.');
define('_JOMRES_COM_MR_DISPGUEST_CCARDNAME','Właściciel karty');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TITLE','Wybór cennika');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS','Ilość dni');
define('_JOMRES_COM_MR_QUICKRES_STEP4_NUMBEROFGUESTS','Ilość gości');
define('_JOMRES_COM_MR_QUICKRES_STEP4_TOTALINVOICE','Razem');
// Opisy Pokoi
define('_JOMRES_COM_MR_VIEWROOMSPROPERTYCONFIG_TITLE','Cechy obiektu i pokoju');
define('_JOMRES_COM_MR_VRCT_TAB_ROOM','Pokój');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMFEATURES','Cechy pokoju');
define('_JOMRES_COM_MR_VRCT_TAB_ROOMTYPES','kategoria pokoju');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYS','Obiekt');
define('_JOMRES_COM_MR_VRCT_TAB_PROPERTYFEATURES','Cechy obiektu');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_LINK','Pokój');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_TYPE','Rodzaj');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NAME','Nazwa');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_NUMBER','Numer');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FLOOR','Piętro');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_DISABLEDACCESS','Dla niepełnosprawnych?');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_MAXPEOPLE','Maksymalna ilość gości');
define('_JOMRES_COM_MR_VRCT_ROOM_HEADER_FEATURES','Charakterystyka');
define('_JOMRES_COM_MR_VRCT_ROOM_SAVE_INSERT','Pokój dodany');
define('_JOMRES_COM_MR_VRCT_ROOM_LINKTEXT','Edytuj');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_LINK','Cechy pokoju');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_HEADER_INPUT','Cechy');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_INSERT','Zapisz cechy pokoju');
define('_JOMRES_COM_MR_VRCT_ROOMFEATURES_SAVE_UPDATE','Zapisz zmiany cech pokoju');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_LINK','Kategorie pokoi');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_ABBV','Wersja skrócona kategorii pokoju');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_HEADER_DESC','Opis kategorii');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_INSERT','Zapisz kategorię');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_SAVE_UPDATE','Aktualizuj kategorie');
define('_JOMRES_COM_MR_VRCT_ROOMTYPES_LINKTEXT','Edytuj');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_NAME','Nazwa');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STREET','Ulica');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TOWN','Miasto');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_REGION','Województwo');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_COUNTRY','Kraj');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POSTCODE','Kod pocztowy');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_TELEPHONE','Telefon');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FAX','Fax');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_EMAIL','E-Mail');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_WEBSITE','Strona WWW');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_FEATURES','Opis');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_INSERT','Zapisz dane obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTY_SAVE_UPDATE','Aktualizuj dane obiekt');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_LINK','Cechy obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_ABBV','Wersja skrócona cech obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_HEADER_DESC','Opis cech obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_INSERT','Zapisz cechę obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTYFEATURES_SAVE_UPDATE','Aktualizuj cechę obiektu');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE','Cenniki');
define('_JOMRES_COM_MR_LISTTARIFF_RATETITLE','Cennik');
define('_JOMRES_COM_MR_LISTTARIFF_RATEDESCRIPTION','Opis');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDFROM','Ważny od dnia');
define('_JOMRES_COM_MR_LISTTARIFF_VALIDTO','Ważny do dnia');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERDAY','Cena za dobę');
define('_JOMRES_COM_MR_LISTTARIFF_MINDAYS','Minimalnie dni');
define('_JOMRES_COM_MR_LISTTARIFF_MAXDAYS','Maksymalnie dni');
define('_JOMRES_COM_MR_LISTTARIFF_MINPEOPLE','Minimalna ilość gości');
define('_JOMRES_COM_MR_LISTTARIFF_MAXPEOPLE','Maksymalna ilość gości');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMCLASS','Kategoria pokoju');
define('_JOMRES_COM_MR_LISTTARIFF_IGNOREPPN','ignorować warunek za osobę za dobę');
define('_JOMRES_COM_MR_LISTTARIFF_ALLOWWE','Weekendy dozwolone');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_INSERT','Dodaj cennik');
define('_JOMRES_COM_MR_LISTTARIFF_SAVE_UPDATE','Aktualizuj cennik');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXT','Edytuj tekst');
define('_JOMRES_COM_MR_LISTTARIFF_LINKTEXTCLONE','Dodaj jako kopię');
define('_JOMRES_COM_MR_LISTTARIFF_DELETED','Cennik usunięty');
define('_JOMRES_COM_MR_LISTTARIFF_TITLE_EDIT','Edytuj cennik');
define('_JOMRES_COM_MR_PUBLICHOLIDAY_TITLE','Dni świąteczne');
define('_JOMRES_COM_MR_BOOKINGSAVEDMESSAGE','Rezerwacja zapisana');
define('_JOMRES_FRONT_MR_MENU_BOOKAROOM','Rezerwacja pokoi');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN','Zamelduj gościa');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT','Wymelduj gościa');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTBOOKINGS','Lista rezerwacji');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LISTNEWBOOKINGS','Pokaż nowe rezerwacje');
define('_JOMRES_FRONT_MR_MENU_ADMIN_HOME','Zarządzanie');
define('_JOMRES_FRONT_MR_MENU_ADMIN_GUESTADMIN','Zestawienia gości');
define('_JOMRES_FRONT_MR_MENU_ADMIN_PROPERTYADMIN','Edycja obiektów');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CHECKAVAILABILITY','Sprawdź dostępność');
define('_JOMRES_FRONT_MR_SUBMITBUTTON_CONFIRMYOURDETAILS','Zatwierdź dane');
define('_JOMRES_FRONT_MR_DISPGUEST_FIRSTNAME','Imię');
define('_JOMRES_FRONT_MR_DISPGUEST_SURNAME','Nazwisko');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_HOUSE_EXPL','Nr domu');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_STREET_EXPL','Ulica');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_TOWN_EXPL','Miasto');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_POSTCODE_EXPL','Kod pocztowy');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_LANDLINE_EXPL','Telefon');
define('_JOMRES_FRONT_MR_EB_GUEST_JOMRES_MOBILE_EXPL','Telefon komórkowy');
define('_JOMRES_FRONT_MR_QUICKRES_STEP2_NOROOMSINRANGE','Niestety żaden pokój nie spełnia wymaganych kryteriów');
define('_JOMRES_FRONT_MR_BOOKINGMADE','<h4>Dziękujmy. Rezerwacja została pomyślnie przyjęta.</h4>Wkrótce skontaktujemy się w celu ustalenia sposobu płatności.<br /><br /><small>Prosimy wziąść pod uwagę, że ta rezerwacja jest tymczasowa i dopiero po otrzymaniu pisemnego potwierdzenia transakcji lub dokonania wpłaty w systemie płatności elektronicznych PayPal będzie wiążąca dla obu stron. Wszystkie informacjie zostały automatycznie w formie E-Mail przesłane na podany przez użytkownika w formularze adres E-Mail.</small>');
define('_JOMRES_FRONT_MR_EMAIL_SUBJECT_INTERNETBOOKINGMADE','Rezerwacja internetowa: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ROOM','Rezerwacja pokoju: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_ARRIVAL','Data przyjazdu: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_DEPARTURE','Data odjazdu: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_NAME','Nazwisko: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_LANDLINE','Telefon: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_MOBILE','Telefon komórkowy: ');
define('_JOMRES_FRONT_MR_EMAIL_TEXT_TOTAL','Łączna cena: ');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE','Zameldowanie gości');
define('_JOMRES_FRONT_MR_BOOKIN_SELECTBUTTON','Wybór gościa');
define('_JOMRES_FRONT_MR_BOOKIN_GUESTBOOKEDIN','Melduj gościa');
define('_JOMRES_FRONT_MR_BOOKIN_NOGUESTSDUEIN','W dniu dzisiejszym nie ma żadnych meldunków gości');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE','Wymeldowanie gości');
define('_JOMRES_FRONT_MR_BOOKOUT_NOGUESTSDUEOUT','W dniu dzisiejszym nie ma żadnych odjazdów');
// Konfiguracja Systemu
define('_JOMRES_COM_A_SUPPLIMENTS','Dopłaty');
define('_JOMRES_COM_A_TARIFFS','Cenniki');
define('_JOMRES_COM_A_DISCOUNTS','Rabaty');
define('_JOMRES_COM_A_JOMRES_FILE_UPLOADS','Transfer plików');
define('_JOMRES_COM_A_CURRENT_SETTINGS','Aktualne ustawienia');
define('_JOMRES_COM_A_EXPLANATION','Objaśnienie');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON','Dopłata do pokoju jednoosobowego');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_DESC','Zaznacz Tak, jeżeli ma być pobierana dopłata.');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_COST','Wysokość dopłaty');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE','Przedpłata obliczana procentowo?');
define('_JOMRES_COM_A_DEPOSIT_ISPERCENTAGE_DESC','Czy przedpłata jest ustawiona jako procent od wartości rezerwacji? Jeżeli nie, to będzie naliczana w sposób ryczałtowy.');
define('_JOMRES_COM_A_DEPOSIT_VALUE','Wysokość przedpłaty');
define('_JOMRES_COM_A_TARIFFS_PER','za osobę/za dobę ');
define('_JOMRES_COM_A_TARIFFS_PER_DESC','Ustaw Tak, jeżeli cena ma być obliczana za osobę/za dobę. Jeżeli nie, cena będzie obliczana za pokój za dobę.');
define('_JOMRES_COM_A_UPLOADS_FILESIZE','Wielkość pliku');
define('_JOMRES_COM_A_UPLOADS_FILESIZE_DESC','Maksymalna wielkość pliku w KB');
define('_JOMRES_FRONT_MR_BOOKED','Zajęty');
define('_JOMRES_COM_CONFIRMATION_TITLE','E-Mail potwierdzający');
define('_JOMRES_COM_CONFIRMATION_DEAR','Szanowna Pani/Szanowny Panie ');
define('_JOMRES_COM_CONFIRMATION_RATE_RULES','Cena za dobę/za pokój ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_DETAILS','Termin rezerwacji:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO1','Dziękujemy za dokonaną rezerwację ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_INTRO2','. Poniżej znajduje się podsumowanie Pani/Panaa rezerwacji. Prosimy o dokładne sprawdzenie. Jeżeli wystąpił jakiś błąd, prosimy o kontakt.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_CHECKIN','Nasza doba hotelowa trwa od 14:00 do 10:00 dnia następnego. Check-In w godzinach od 14:00 do 19:00. W razie spodziewanego późniejszego przyjazdu prosimy o kontakt.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_LOOKFORWARD','Cieszymu się i oczekujemy Pani/Pana przyjazdu  ');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_HAVEAPLEASANTSTAY','Już teraz życzymy udanego wypoczynku.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINTINTRO','Proszę uważnie przeczytać:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_BINDINGCONTRACT','Zwracamy uwagę na fakt, że ta rezerwacja jest wiążącą umową. Oznacza to, że w przypadku rezygnacji, może Pani/Pan zostać obciążona/ny kosztami w pełnej wysokości ceny pobytu.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_NOALLOWANCE','Za niewykorzystane posiłki albo tylko częściowo wykorzystane pokoje nie może zostać wypłacony zwrot. Z tego powodu sugerujemy zawarcie specjalnego ubezpieczenia. Oferuje je większość biur podróży.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_CANCELLATIONCHARGES_INTRO','Warunki zmiany lub anulacji rezerwacji. W wypadku anulacji rezerwacji, musi być ona dokonana w formie pisemnej. Poniżej znajduje się zestawienie związanych z tym kosztów:');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_30DAYSPLUS','Wcześniej niż 30 dni przed terminem przyjazdu');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_DEPOSITONLY',' tylko już dokonane przedpłaty.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_1530DAYS','15 do 30 dni przed terminem przyjazdu');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_50PERCENT',' 50% łącznej wartości rezerwacji.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_ARRIVALDATETO14DAYS','Od 14 dnia przed terminem przyjazdu');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_SMALLPRINT_100_PERCENT',' 100% łącznej wartości rezerwacji.');
define('_JOMRES_COM_CONFIRMATION_RESERVATION_VAT','Wszystkie ceny zawierają podatek VAT.');
define('_JOMRES_COM_CONFIRMATION_PRINT','Drukuj E-Mail z potwierdzeniem rezerwacji');
//Rachunek
define('_JOMRES_COM_INVOICE_TITLE','Wydruk rachunku');
define('_JOMRES_COM_INVOICE_STAYNIGHTS','Ilość dób: ');
define('_JOMRES_COM_INVOICE_CONTRACTAGREED','Warunki umowy: ');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT','Cena za dobę: ');
define('_JOMRES_COM_INVOICE_LETTER_GRANDTOTAL','Suma');
define('_JOMRES_COM_INVOICE_LETTER_INTRO1','Dziękujemy bardzo.');
define('_JOMRES_COM_INVOICE_LETTER_HOPEYOUENJOYEDSTAY','Mamy nadzieję, że pobyt był udany.');
define('_JOMRES_COM_INVOICE_PRINT','Drukuj rachunek');
define('_JOMRES_COM_ADDSERVICE_TITLE','Dodaj do rachunku usługi dodatkowe.');
define('_JOMRES_COM_ADDSERVICE_DESCRIPTION','Opis usługi');
define('_JOMRES_COM_ADDSERVICE_VALUE','Cena usługi');
define('_JOMRES_COM_ADDSERVICE_BOOKINGDESC','Dalsze doliczone pozycje');
define('_JOMRES_COM_ADDSERVICE_TOTALVALUE','Suma doliczonych pozycji: ');
define('_JOMRES_COM_ADDSERVICE_SAVEMESSAGE','Dodaj pozycje do rachunku');
define('_JOMRES_UPLOAD_IMAGE','Zapisać zdjęcie');
define('_JOMRES_FILE_UPLOAD','Transfer wybranych plików na serwer');
define('_JOMRES_FILE_ERROR_TYPE','Plik może mieć następujący format:');
define('_JOMRES_FILE_ERROR_EMPTY','Proszę wybrać plik.');
define('_JOMRES_FILE_ERROR_NAME','Nazwa pliku może zawierać tylko znaki alfabetyczne, proszę nie używać spacji w nazwach.');
define('_JOMRES_FILE_ERROR_SIZE','Ten plik jest niestety większy niż dopuszczalny rozmiar pliku.');
define('_JOMRES_FILE_NOT_UPLOADED','Plik nie został zapisany!');
define('_JOMRES_FILE_UPDATED','Plik pomyślnie zaktualizowany.');
define('_JOMRES_COM_A_JSCALENDAR','JS Kalendarz');
define('_JOMRES_COM_A_CALENDARLANGUAGE','Plik językowy dla JS Kalendarza');
define('_JOMRES_COM_A_CALENDARLANGUAGE_DESC','Tutaj można wybrać wersję językową dla kalendarza. Szczegóły znajdują się na <a href="http://sourceforge.net/tracker/?atid=544285&group_id=75569&func=browse" target="_blank">stronie programistów tego skryptu</a>.');
define('_JOMRES_COM_A_CALENDARCSS','Plik CSS kalendarza JS');
define('_JOMRES_COM_A_CALENDARCSS_DESC','Tutaj można ustawić plik CSS dla kalendarza.');
define('_JOMRES_COM_A_ODDS','Pozostałe ustawienia');
define('_JOMRES_COM_A_ERRORCHECKING','List minicomponent calls');
define('_JOMRES_COM_A_ERRORCHECKING_DESC','Switch this to Yes to see a log of the minicomponents called at the bottom of the page after Jomres has completed running. It also disables the internal redirect function. This is useful if you are trying to identify which minicomponents are performing certain services.');
define('_JOMRES_FILE_DELETE','Usuń zdjęcie');
define('_JOMRES_FILE_DELETED','Zdjęcie usunięte');
define('_JOMRES_COM_MR_QUICKRES_STEP1_ANYPROPERTY','Wszystkie obiekty');
define('_JOMRES_COM_MR_ROOM_DELETE','Usuń pokój');
define('_JOMRES_COM_MR_ROOM_UNABLETODELETE','Nie można usunąć tego pokoju, ponieważ został już zarezerwowany. Proszę anulować te rezerwacje i spróbować ponownie.');
define('_JOMRES_COM_MR_ROOM_DELETED','Pokój usunięty.');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETE','Usuń ustawienia pokoju');
define('_JOMRES_COM_MR_ROOMFEATURE_UNABLETODELETE','Nie można usunąć tych ustawień, ponieważ zostały już użyte przy rezerwacji. Proszę anulować rezerwacje, które zawierają te ustawienia i spróbować ponownie.');
define('_JOMRES_COM_MR_ROOMFEATURE_DELETED','Ustawienia pokoju usunięte');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETE','Usuń ustawienia obiektu');
define('_JOMRES_COM_MR_PROPERTYFEATURE_UNABLETODELETE','Nie można usunąć tych ustawień, ponieważ zostały już użyte przy rezerwacji. Proszę anulować rezerwacje, które zawierają te ustawienia i spróbować ponownie.');
define('_JOMRES_COM_MR_PROPERTYFEATURE_DELETED','Ustawienia obiektu usunięte');
define('_JOMRES_COM_MR_ROOMCLASS_DELETE','Usuń kategorie pokoi');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_ROOMS','Ta kategoria nie może zostać usunięta, ponieważ istnieją pokoje które są do niej przypisane. Proszę przypisać te pokoje innym kategoriom i spróbować ponownie.');
define('_JOMRES_COM_MR_ROOMCLASS_UNABLETODELETE_TARIFFS','Ta kategoria nie może zostać usunięta, ponieważ istnieje cennik do którego jest przypisana. Proszę przypisać ten cennik do inner kategorii i spróbować ponownie.');
define('_JOMRES_COM_MR_ROOMCLASS_DELETED','Kategoria pokoju usunięta');
define('_JOMRES_COM_MR_PROPERTY_DELETE','Usuń obiekt');
define('_JOMRES_COM_MR_PROPERTY_DELETED','Obiekt usunięty');
define('_JOMRES_COM_MR_PROPERTY_DELETE_NORIGHTS','Niestety obiekt nie może być usunięty, nie posiadasz wystarczających praw użytkownika.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE','Szerokość dużego zdjęcia');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_MAPPINGLINK','Link do mapy położenia');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_PROPDESCRIPTION','Opis obiektu');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_CHECKINTIMES','Meldowanie w godzinach');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AREAACTIVITIES','Atrakcje w okolicy');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_DRIVINGDIRECTIONS','Opis dojazdu');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_AIRPORTS','Lotniska');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_OTHERTRANSPORT','dalsze możliwości połączeń komunikacyjne');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_POLICIESDISCLAIMERS','Warunki użytkowania itd.');
define('_JOMRES_COM_MR_PROPERTIESLISTING_THISPROPERTYADDRESS','Adres');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE','Użytkownicy mogą rezerwować on-line');
define('_JOMRES_COM_A_VISITORSCANBOOKONLINE_DESC','Dla pewności ustaw na Tak, wówczas odwiedzający mogą rezerwować on-line. W przeciwnym przypadku na Nie.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS','Stała długość pobytu?');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC','Ustaw na Tak, jeżeli pokoje mają być dostępne tylko w ustalonych z góry terminach.');
define('_JOMRES_COM_A_FIXEDPERIOD','Stała długość pobytu: ');
define('_JOMRES_COM_A_BOOKING','Rezerwacje');
define('_JOMRES_COM_A_FIXEDPERIOD_NUMBEROFPERIODS','Maksymalna ilość cyklicznych rezerwacji, np: 3 x 7 cykli = 21 dni.');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY','Czy obiekt jest jednopokojowy?');
define('_JOMRES_COM_A_SINGLEROOMPROPERTY_DESC','Ustawienie na Tak daje możliwość rezerwowanie całego objeku, a nie tylko pojedynczych pokoi.');
define('_JOMRES_FRONT_MR_REVIEWBOOKING','Sprawdź rezerwację');
define('_JOMRES_COM_MR_CONFIRMBOOKING','Potwierdź rezerwację');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY','Poniedziałek');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY','Wtorek');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY','Środa');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY','Czwartek');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY','Piątek');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY','Sobota');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY','Niedziela');
define('_JOMRES_COM_MR_WEEKDAYS_MONDAY_ABBR','Pn');
define('_JOMRES_COM_MR_WEEKDAYS_TUESDAY_ABBR','Wt');
define('_JOMRES_COM_MR_WEEKDAYS_WEDNESDAY_ABBR','Śr');
define('_JOMRES_COM_MR_WEEKDAYS_THURSDAY_ABBR','Cz');
define('_JOMRES_COM_MR_WEEKDAYS_FRIDAY_ABBR','Pt');
define('_JOMRES_COM_MR_WEEKDAYS_SATURDAY_ABBR','So');
define('_JOMRES_COM_MR_WEEKDAYS_SUNDAY_ABBR','Nd');
define('_JOMRES_COM_A_AVLCAL','Kalendarz rezerwacji');
define('_JOMRES_COM_AVLCAL_TODAYCOLOUR','Kolor czcionki dla aktualnego dnia');
define('_JOMRES_COM_AVLCAL_INMONTHFACE','Kolor czcionki dla aktualnego miesiąca');
define('_JOMRES_COM_AVLCAL_OUTMONTHFACE','Kolor czcionki dla przeszłego i następnego miesiąca');
define('_JOMRES_COM_AVLCAL_INBGCOLOUR','Kolor pola dla dni aktualnego miesiąca');
define('_JOMRES_COM_AVLCAL_OUTBGCOLOUR','Kolor pól dla dni z przeszłego i następnego miesiąca');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR','Kolor pól dla zarezerwowanych dni');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR','Kolor pól dla otwartych rezerwacji (Rezerwacje, dla których nie dokonano jeszcze żadnej wpłaty)');
define('_JOMRES_COM_AVLCAL_PASTCOLOUR','Kolor pól dla już przeszłych dni');
define('_JOMRES_COM_AVLCAL_OCCUPIEDCOLOUR_KEY','zajęty');
define('_JOMRES_COM_AVLCAL_INMONTHFACE_KEY','wolny');
define('_JOMRES_COM_AVLCAL_PROVISIONALCOLOUR_KEY','rezerwacja niepotwierdzona');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO','Założony dzień przyjazdu');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC','Tylko dla obiektów ze stałą długością pobytu. Wzbierz dzień tygodnia, w którm będzie możliwy przyjazd.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY','Założonym dniem przyjazdu jest');
define('_JOMRES_FRONT_MR_FIXEDPRIOD1','Okres rezerwacji');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR','Pokaż kalendarz rezerwacji?');
define('_JOMRES_COM_A_SHOWAVILABILITY_CALENDAR_DESC','Ustaw na Tak, jeżeli kalendarz rezerwacji ma być widoczny.');
define('_JOMRES_FRONT_AVAILABILITY','Kalendarz rezerwacji');
define('_JOMRES_FRONT_CALENDAR_CLICKDATES','Aby przejść do formularza rezerwacyjnego, proszę kliknąć na jakąś datę.');
define('_JOMRES_FRONT_BLACKBOOKING','Wyłączenia');
define('_JOMRES_FRONT_BLACKBOOKING_NEW','Nowe wyłączenie');
define('_JOMRES_FRONT_DELETEGUEST','Usuń gościa');
define('_JOMRES_FRONT_DELETEGUEST_GUESTDELETED','Gość usunięty');
define('_JOMRES_FRONT_DELETEGUEST_UNABLETODELETEGUEST','Niestety ten gość nie może być usunięty. Istnieją jeszcze dane, które są do niego przypisane i to najpierw one muszą zostać usunięte.');
define('_JOMRES_COM_INVOICE_ACTUALROOMCOST','Aktualny koszt pokoju: ');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_HELLO','Witamy');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_THANKS','Dziękujemy bardzo za rezerwację na');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_SUMMARY','Zestawienie danych rezerwacji:');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_ANYQUESTIONS','Jeżeli ma Pan/Pani jeszcze jakieś pytanie co do tej rezerwacji, prosimy o kontakt telefoniczny.');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_TELEPHONE','Nasz numer telefonu ');
define('_JOMRES_FRONT_GUEST_EMAIL_TEXT_EMAIL','Może Pan/Pani skontaktować się także przez E-Mail');
define('_JOMRES_COM_MR_QUICKRES_STEP2_ROOMSMOKING','Palacz');
define('_JOMRES_FRONT_ROOMSMOKING_EITHER','Obojętne');
define('_JOMRES_COM_CALENDAROUTPUT','Format daty kalendarza');
define('_JOMRES_COM_CALENDAROUTPUT_DESC','Tutaj można zmienić ustawienia wyświetlania formatu daty w kalendarzu.');
define('_JOMRES_COM_CALENDARINPUT','Format dodawania daty z kalendarza');
define('_JOMRES_COM_CALENDARINPUT_DESC','Tutaj można zmienić format dodawania daty z kalendarza.');
define('_JOMRES_COM_A_FIXEDPERIODBOOKINGSSHORT','Przy stałych terminach rezerwacji, zezwolić na krótkie przerwy.');
define('_JOMRES_COM_A_FIXEDPERIOD_SHORTBREAK_DAYS','Ilość dni przerwy');
define('_JOMRES_COM_MR_VRCT_PUBLISHED','Opublikować');
define('_JOMRES_COM_A_PAYPAL','PayPal');
define('_JOMRES_FRONT_MR_MENU_ADMIN_AUDITTRAIL','Protokół rezerwacji');
define('_JOMRES_MR_AUDIT_LISTING_DATE','Data');
define('_JOMRES_MR_AUDIT_LISTING_TIME','Godzina');
define('_JOMRES_MR_AUDIT_LISTING_USER','Użytkownik (nazwa)');
define('_JOMRES_MR_AUDIT_LISTING_OPERATION','Operacja');
define('_JOMRES_MR_AUDIT_LISTING_VIEWSQL','Pokaż szczegóły');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_DATE','Filtruj wg daty');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_USERNAME','Filtruj wg użytkownika');
define('_JOMRES_MR_AUDIT_LISTING_FILTER_OPERATION','Filtruj wg operacji');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STATUS','Status');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING','Brak przyjazdu');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY','Odjazd dzisiaj');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT','Aktualny gość');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY','Odjeżdża dzisiaj');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE','Termin odjazdu przekroczony');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE','Nie przyjechał');
define('_JOMRES_MR_AUDIT_UNKNOWNUSER','Nieznany użytkownik');
define('_JOMRES_MR_AUDIT_INSERT_ROOM','Utworzony pokój');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM','Zaktualizowany pokój');
define('_JOMRES_MR_AUDIT_DELETE_ROOM','Usunięty pokój');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_FEATURE','Cecha pokoju utworzona');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_FEATURE','Cecha pokoju zaktualizowana');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_FEATURE','Cecha pokoju usunięta');
define('_JOMRES_MR_AUDIT_INSERT_ROOM_TYPE','Kategoria pokoju utworzona');
define('_JOMRES_MR_AUDIT_UPDATE_ROOM_TYPE','Kategoria pokoju zaktualizowana');
define('_JOMRES_MR_AUDIT_DELETE_ROOM_TYPE','Kategoria pokoju usunięta');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY','Obiekt utworzony');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY','Obiekt zaktualizowany');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY','Obiekt usunięty');
define('_JOMRES_MR_AUDIT_INSERT_PROPERTY_FEATURE','Ustawienia obiektu utworzone');
define('_JOMRES_MR_AUDIT_UPDATE_PROPERTY_FEATURE','Ustawienia obiektu zaktualizowane');
define('_JOMRES_MR_AUDIT_DELETE_PROPERTY_FEATURE','Ustawienia obiektu usunięte');
define('_JOMRES_MR_AUDIT_EDIT_PROPERTY_SETTINGS','Ustawienia obiektu zmienione');
define('_JOMRES_MR_AUDIT_PUBLISH_PROPERTY','Obiekt opublikować');
define('_JOMRES_MR_AUDIT_INSERT_TARIFF','Cennik utworzony');
define('_JOMRES_MR_AUDIT_UPDATE_TARIFF','Cennik zaktualizowany');
define('_JOMRES_MR_AUDIT_DELETE_TARIFF','Cennik usunięty');
define('_JOMRES_MR_AUDIT_ADDSERVICE','Cena usługi dodatkowej dodana');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTIN','Gość zameldowany');
define('_JOMRES_MR_AUDIT_BOOKEDGUESTOUT','Gość wymeldowany');
define('_JOMRES_MR_AUDIT_ENTEREDDEPOSIT','Dodaj przedpłatę');
define('_JOMRES_MR_AUDIT_INSERT_GUEST','Gość dodany');
define('_JOMRES_MR_AUDIT_UPDATE_GUEST','Gość zaktualizowany');
define('_JOMRES_MR_AUDIT_DELETE_GUEST','Gość usunięty');
define('_JOMRES_MR_AUDIT_BOOKED_ROOM','Pokój zarezerwowany');
define('_JOMRES_MR_AUDIT_INSERT_EXTRA','Usługa dodatkowa utworzony');
define('_JOMRES_MR_AUDIT_UPDATE_EXTRA','Usługa dodatkowa zaktualizowana');
define('_JOMRES_MR_AUDIT_DELETE_EXTRA','Usługa dodatkowa usunięta');
define('_JOMRES_MR_AUDIT_PUBLISH_EXTRA','Usługa dodatkowa opublikowana');
define('_JOMRES_MR_AUDIT_BLACKBOOKING','Wyłączenie dokonane');
define('_JOMRES_MR_AUDIT_BLACKBOOKING_DELETE','Wyłączenie usunięte');
define('_JOMRES_COM_MR_EXTRA_TITLE','Usługi dodatkowe');
define('_JOMRES_COM_MR_EXTRA_DESC','Opis');
define('_JOMRES_COM_MR_EXTRA_NAME','Nazwa');
define('_JOMRES_COM_MR_EXTRA_PRICE','Cena');
define('_JOMRES_COM_MR_EXTRA_SAVE_UPDATED','Usługi dodatkowe zaktualizowane');
define('_JOMRES_COM_MR_EXTRA_LINKTEXT','Edytuj usługi dodatkowe');
define('_JOMRES_COM_MR_EXTRA_DELETED','Usługa usunięta');
define('_JOMRES_FRONT_MR_MENU_ADMIN_EXTRAS','Edycja usług dodatkowych');
define('_JOMRES_COM_A_EXTRAS','Pokaż usługi dodatkowe w czasie rezerwacji?');
define('_JOMRES_COM_A_EXTRAS_DESC','Ustaw na Tak, aby oferować ewentualne usługi dodatkowe.');
define('_JOMRES_FRONT_MR_BOOKING_EXTRAS_HELP','Usługi dodatkowe.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSTARTS','Data początkowa wyłączenia');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_BBSERVICERESUMES','Data końcowa wyłączenia');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS','Edycja wyłączenia');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_STAGE2_ERROR','Przy próbie wyłączenia pokoju/i doszło do błędu. Jeden lub więcej z nich nie jest wolny.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_ROOMSSUBJECT','Pokoje wybrane do wyłączenia');
define('_JOMRES_COM_MR_BLACKBOOKINGS_VIEWBLACKBOOKING','Pokaż wyłączenie');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BLACKBOOKINGS_NOBBOOKINGS','Nie ma żadnych wyłączeń');
define('_JOMRES_COM_MR_VRCT_PROPERTY_HEADER_STARS','Ilość gwiazdek');
define('_JOMRES_COM_A_SMOKING','Pokaż palący / niepalący?');
define('_JOMRES_COM_A_SMOKING_DESC','Ustaw na Tak, jeżeli opcja wyboru palący / niepalący ma być dostępna.');
define('_JOMRES_COM_A_RESET','Cofnij zmiany');
define('_JOMRES_COM_A_PAYPAL_CANCELLED','Rezerwacja anulowana');
define('_JOMRES_FRONT_MR_SEARCH_PROPERTYNAME','Szukaj wg nazw obiektów:');
define('_JOMRES_COM_A_SMOKING_OPTION','Palący / niepalący - ustawienia');
define('_JOMRES_COM_A_CURRENCYSYMBOL','Kod waluty');
define('_JOMRES_COM_A_CURRENCYSYMBOL_DESC','Np. &amp;Euro&#59; proszę zauważyć, że najlepsze jest dodanie w tym miejscu czystego kodu HTML. Lista wszystkich kodów znajduje się tutaj <a href="http://www.w3schools.com/tags/ref_entities.asp" target="_blank">w3schools</a>');
define('_JOMRES_COM_A_CURRENCYCODE','Waluta');
define('_JOMRES_COM_A_CURRENCYCODE_DESC','Np. GBP - jest to potrzebne zwłaszcza przy użytkowaniu płatności PayPal. Lista wszystkich walut znajduje się tutaj <a href="http://www.xe.com/iso4217.htm" target="_blank">XE.com</a>');
define('_JOMRES_COM_A_CLICKFORMOREINFORMATION','Kliknij tutaj, aby uzyskac więcej informacji');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO','Ograniczenie okresu rezerwacji?');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC','Ustaw na Tak, aby ograniczyć okres rezerwacji do x dni do przodu. To oznacza, że jeżeli goście bedą próbować wybrać datę, która leży dalej w przyszłości, system przestawi datę przyjazdu automatycznie na datę dzisiejszą.');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITDAYS','Możliwy okres rezerwacji ograniczyć na następującą ilość dni:');
define('_JOMRES_COM_A_TAX_WARNING','<span style="color:red;">Wskazówka: nie zaleca się ustawienia obu dalszych opcji na Tak. Poprawnie jest wybrać tylko jedną z opcji kalkulacji podatków.</span>');
define('_JOMRES_COM_FRONT_ROOMTAX','Podatek');
define('_JOMRES_COM_A_ROOMTAX','Podatek');
define('_JOMRES_COM_A_ROOMTAX_DESC','Stworzono na rynek amerykański. Cena pokoju będzie podniesiona o tą wartość. Możliwy jest wybór pomiędzy cenami ryczałtowymi, opodatkowanie procentowe albo kombinacja obu. Proszę jednak zauważyć, że ta wartość ma wpływ tylko na cenę pokoi.');
define('_JOMRES_COM_A_ROOMTAX_FIXED','Wysokość podatku ryczałtowego');
define('_JOMRES_COM_A_ROOMTAX_PERCENTAGE','Stopa procentowa podatku');
define('_JOMRES_COM_A_EUROTAX','Podatek ryczałtowy');
define('_JOMRES_COM_A_EUROTAX_PERCENTAGE','Procent podatku');
define('_JOMRES_MR_AUDIT_ARCHIVE','Archiwuj wszystkie wpisy');
define('_JOMRES_MR_AUDIT_ARCHIVED_MESSAGE',' Wpisy zarchiwowane');
define('_JOMRES_MR_AUDIT_ARCHIVED_AUDIT','Administrator zarchiwizował dane');
define('_JOMRES_FRONT_TARIFFS','Cenniki');
define('_JOMRES_FRONT_TARIFFS_TITLE','Nazwa cennika');
define('_JOMRES_FRONT_TARIFFS_DESC','Opis cennika');
define('_JOMRES_FRONT_TARIFFS_ROOMTYPE','Typ pokoju');
define('_JOMRES_FRONT_TARIFFS_STARTS','Ważny od');
define('_JOMRES_FRONT_TARIFFS_ENDS','Ważny do');
define('_JOMRES_FRONT_TARIFFS_PPPN','Za os. za noc');
define('_JOMRES_FRONT_TARIFFS_PN','Za noc');
define('_JOMRES_FRONT_TARIFFS_NOTWEEKEND','Bez weekendów');
define('_JOMRES_FRONT_TARIFFS_MINDAYS','Minimum dni');
define('_JOMRES_FRONT_TARIFFS_MAXDAYS','Maksimum dni');
define('_JOMRES_FRONT_TARIFFS_MINPEEPS','Min. osób');
define('_JOMRES_FRONT_TARIFFS_MAXPEEPS','Maks. osób');
define('_JOMRES_FRONT_PREVIEW','Podgląd');
define('_JOMRES_COM_A_EDITINGMODEON','Edycja włączona?');
define('_JOMRES_COM_A_EDITING_CURRENTTEXT','Aktualny tekst');
define('_JOMRES_COM_A_EDITING_NEWTEXT','Nowy tekst');
define('_JOMRES_MR_AUDIT_UPDATECUSTOMTEXT','Tekst zaktualizowany.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_LANGUAGE','Wybierz język');
define('_JOMRES_COM_A_AUDITING_SHOWING','Ilość niezarchiwowanych rekordów: ');
define('_JOMRES_FRONT_PTYPE','Typ obiektu');
define('_JOMRES_COM_PTYPES_LIST_TITLE','Lista typów obiektów');
define('_JOMRES_COM_PTYPES_LIST_TITLE_EDIT','Edytuj typy obiektów');
define('_JOMRES_COM_PTYPES_PTYPE','Typ obiektu');
define('_JOMRES_COM_PTYPES_PTYPE_DESC','Opis typu obiektu');
define('_JOMRES_COM_PTYPES_SAVED','Typ obiektu zapisany');
define('_JOMRES_COM_PTYPES_UNABLETO_DELETE','Anulacja typu obiektu niemożliwa. Typ obiektu jest przypisany do jednego lub więcej obiektów. Usuń to przypisanie i spróbuj ponownie');
define('_JOMRES_COM_PTYPES_DELETED','Typ obiektu anulowany');
define('_JOMRES_COM_MR_EDITBOOKING_REMAINDERTOPAY','Przypomnienie o płatności');
define('_JOMRES_EXTRAS_NOEXTRAS','Brak dodatkowych usług do włączenia do rachunku');
define('_JOMRES_COM_CHARGING_DEPOSIT','Przedpłata');
define('_JOMRES_COM_CHARGING_FULLAMT','Pełna suma');
define('_JOMRES_COM_CHARGING_CONFIG','Suma pobrana w czasie rezerwacji');
define('_JOMRES_COM_CHARGING_CONFIG_DESC','Użyj tej opcji aby określić sposób pobierania opłaty w czasie rezerwacji. Wybierz przedpłatę, jeżeli ma być on pobrany w czasie rezerwacji lub pełną sumę, jeżeli ma ona być pobrana w czasie rezerwacji.');
define('_JOMRES_COM_MONTHSTOSHOW','Ile miesięcy  ma być pokazane');
define('_JOMRES_COM_MONTHSTOSHOW_DESC','Ile miesięcy kalendarza ma być pokazana w ramach prezentacji dostępności pokoi?');
define('_JOMRES_INVOICE_SIGNEDONBEHALFOF','Podpisane w imieniu ');
// V1.4
define('_JOMRES_COM_A_GATEWAYLIST','Płatności elektroniczne');
define('_JOMRES_COM_A_CANCEL','Anuluj');
define('_JOMRES_FRONT_BLACKBOOKING_DESC','Wybierz pokó/je, które chcesz wyłączyć ze sprzedaży i odpowiednie daty. <br>Jeżeli przy pokoju nie ma pola wyboru, oznacza to że nie może on być zablokowany, aż istniejąca rezerwacja/e nie zostanie zrealizowana lub anulowana.<br/> PO wybraniu odpowiednich dat kliknij klawisz "dodaj" aby sprawdzić ponownie dostępność pokoi. ');
define('_JOMRES_JR_NOTLOGGEDIN','<center><b>Prawdopodobnie serwer wylogował cię z powodu zbyt długiego okresu braku aktywności</b> Zaloguj się i spróbuj ponownie.');
define('_JOMRES_JR_BLACKBOOKING_REASON','Powód');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS','Używanie płatności elektronicznych?');
define('_JOMRES_COM_A_GATEWAY_USEGATEWAYS_DESC','Ustaw na Tak, jeżeli chcesz korzystać z płatności elektronicznych. <b>Uwaga:</b>To nie zdezaktywuje kalkulacji przedpłaty, pokazywanej w czasie procesu rezerwacji. Aby zdezaktywować funkcję kalkulowania przedpłaty należy dokonać zmian w szablonie odpowiedzialnym za prezentację wolnych pokoi w części dot. przedpłaty.');
define('_JOMRES_COM_A_GATEWAY_BOOKING_CHOOSE','Wybierz metodę płatności.');
define('_JOMRES_COM_A_GATEWAY_ENABLED','Płatności elektroniczne włączone?');
define('_JOMRES_MR_AUDIT_PLUGINS_UPDATE','Ustawienia wtyczek zmienione');
define('_JOMRES_MR_AUDIT_PLUGINS_INSERT','Ustawienie wtyczek dodane');
define('_JOMRES_FRONT_GALLERYLINK','View this property\'s website');
define('_JOMRES_COM_A_GALLERYLINK','External link');
define('_JOMRES_COM_A_GALLERYLINK_DESC','Put a link to your website here.');
define('_JOMRES_MR_AUDIT_CREDITCARD_VIEWED','Karta kredytowa przejrzana');
define('_JOMRES_MR_AUDIT_CREDITCARD_UPDATED','Karta kredytowa zaktualizowana');
define('_JOMRES_MR_CREDITCARD_EDIT','Edytuj dane karty kredytowej');
define('_JOMRES_COM_A_EDITICON','Edytuj rozmiar ikony');
define('_JOMRES_JR_A_IMAGEHANDLING_BATCHUPLOAD','Transfer fotografii obiektu na serwer');
define('_JOMRES_JR_A_IMAGEHANDLING_IMAGESALREADYINDIR','Istniejące fotografie');
define('_JOMRES_COM_A_SLIDESHOWS','Pokaz slajdów');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWLINK','Pokazać odsyłacz do pokazu slajdów?');
define('_JOMRES_COM_A_SLIDESHOWS_SHOWSLIDESHOWINLINE','Pokaż slajdy w ramach strony?');
define('_JOMRES_COM_A_SLIDESHOW_THUMBSIZE','Wysokość miniaturek slajdów');
define('_JOMRES_FRONT_SLIDESHOW','Pokaz slajdów');
define('_JOMRES_COM_A_SLIDESHOWS_NOIMAGES','<br />Brak zdjęć tego obiektu');
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSLINK','Pokaż odsyłacz do cenników?');
define('_JOMRES_COM_A_POPUPSALLOWED','Wyskakujące okna dozwolone?');
define('_JOMRES_COM_A_POPUPSALLOWED_DESC','Jeżeli ustawione na Nie, to odsyłacz który normalnie otwiera nowe okno będzie otwierany w ramach strony. EKSPERIMENTALNE! ');
define('_JOMRES_FRONT_IMAGEUPLOADS','Zbiorczy transfer zdjęć na serwer');
define('_JOMRES_FRONT_IMAGEUPLOADS_INFO','Użyj tego formularza, aby przetransferować wiele zdjęć tego obiektu na serwer.<br/><b>Zwróć uwagę</b>, że każde zdjęcie z tą samą nazwą zostanie zastąpione nowym. Zwróć także uwagę, że ten formularz nie umożliwia transferu na serwer zdjęć konkretnego pokoju lub loga obiektu. Można tego dokonać z sekcji administracyjnej obiektu.<br/><b>Uwaga:</b> zdjęcia przetransferowane z tego formularza będą zapisane do katalogu /images/stories/jomres/*property_uid* . Jeżeli ten folder nie istnieje, zostanie utworzony, o ile inny folder nie został wskazany w procesie konfiguracji.');
define('_JOMRES_A_TABS_MISC','Różne');
define('_JOMRES_A','Konfiguracja strony');
define('_JOMRES_A_GLOBALPFEATURES','Używaj globalnych cech obiektów');
define('_JOMRES_A_GLOBALPFEATURES_DESC','Ustaw na Tak, jeżeli chcesz wymusić używanie przez wszystkie obiekty tylko cech zdefiniowanych przez administratora strony.');
define('_JOMRES_A_GLOBALPFEATURES_INFO','Aby powiązać cechę z piktogramem, należy najpierw przetransferować na serwer pliki piktogramów do katalogu /images/stories/jomres/pfeatures/ . ');
define('_JOMRES_A_ICON','Piktogram');
define('_JOMRES_A_GLOBAL_SEARCHOPTION','Wybierz wtyczkę wyszukiwania, którą chcesz używać.');
define('_JOMRES_FRONT_NORESULTS','<b>Twoje wyszukiwanie nie dało żadnych rezultatów. Zmodyfikuj kryteria i spróbuj ponownie.</b>');
define('_JOMRES_AREYOUSURE','Czy jesteś pewny/a?');
define('_JOMRES_FRONT_MR_MENU_BOOKTHISPROPERTY','Zarezerwuj ten obiekt');
define('_JOMRES_COM_MR_DISPGUEST_CCV','kod bezpieczeństwa karty');
//v1.4c
define('_JOMRES_COM_A_TARIFFS_SHOWTARIFFSINLINE','Pokazuj cenniki w ramach strony?');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS','Adres');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS','Informacja szczegółowa');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS','Kliknij aby sprawdzić dostępność');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS','Pokaż cennik');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWADDRESS_TITLE','Pokaż informację adresową pod tym odsyłaczem');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWDETAILS_TITLE','Pokaż informację o obiekcie pod tym odsyłaczem');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWROOMS_TITLE','Pokaż pokoje i ich dostępność pod tym odsyłaczem');
define('_JOMRES_COM_A_BASICTEMPLATE_SHOWTARIFFS_TITLE','Pokaż cennik pod tym odsyłaczem');
define('_JOMRES_COM_A_TARIFFS_MODEL_SINGLETARIFF','Stałe ceny');
define('_JOMRES_COM_A_TARIFFS_MODEL_AVERAGES','Średnie ceny');
define('_JOMRES_COM_A_TARIFFS_MODEL','Wybierz model cennika, jaki chcesz używać');
define('_JOMRES_COM_A_TARIFFS_MODEL_DESC',"Masz do wyboru dwie metody kalkulacji cen. Pierwsza - stałe ceny - pozwala na oferowanie wielu różnych cenników, a cena za nocleg jest stała przez cały okres pobytu. Jest to użyteczne, jeżeli chcesz oferować w tym samym okresie różne ceny, np za nocleg ze śniadaniem, nocleg z półwyżywieniem, nocleg z pełnym wyżywieniem. Wybierz - ceny średnie - jeżeli chcesz ustalić ceny zależnie od daty. Aplikacja znajdzie cenę dla każdego dnia w ramach razerwacji, doda je do siebie i wskaże uśrednioną cenę dla całego okresu rezerwacji");
// v1.4e
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT','Dać możliwość wprowadzenie daty odjazdu?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC',"Ustaw na Nie, jeżeli nie chcesz dać możliwości wpisywania daty odjazdu. Zrób tak tylko wtedy, gdy akceptujesz fakt, że data odjazdu będzie zawsze automatycznie ustawiana na dzień następny po przyjeździe.");
// v1.4f
define('_JOMRES_COM_PROPERTYLISTDESC','Ograniczenie opisu');
define('_JOMRES_COM_PROPERTYLISTDESC_DESC',"Jest to ograniczenie ilości liter pokazywanych jako wyciąg z opisu każdego obiektu w ramach listy obiektów.");
// v1.4g
define('_JOMRES_COM_A_DATEFORMATSTYLE','Używaj formatowania daty');
define('_JOMRES_COM_A_DATEFORMATSTYLE_DESC','Ustaw na Tak, jeżeli chcesz ustalić format daty zgodnie z funkcją date() (Zobacz <a href="http://www.php.net/manual/en/function.date.php">Tutaj</a>). Ustaw na Nie, jeżeli chcesz użyć formatu funkcji strftime() (zobacz <a href="http://www.php.net/manual/en/function.strftime.php">Tutaj</a> np. %b %d %Y ');
define('_JOMRES_COM_MR_VRCT_PUBLISH','Kliknij aby opublikować');
define('_JOMRES_COM_MR_VRCT_UNPUBLISH','Kliknij aby cofnać publikację');
define('_JOMRES_A_GLOBALROOMTYPES','Używaj globalnych typów pokoi');
define('_JOMRES_A_GLOBALROOMTYPES_DESC','Ustaw na Tak, jeżeli chcesz aby wszystkie obiekty używały tylko typów pokoi zdefiniowanych przez administratora.  Należy ustawić na tak, jeżeli ma byc możliwe wyszukiwanie wg typów pokoi.');
define('_JOMRES_A_GLOBALROOMTYPES_INFO','Aby przypisać piktogram do typu pokoju, należy uprzednio zapisać piktogramy typów pokoi do katalogu /images/stories/jomres/rmtypes/ na serwerze. ');
define('_JOMRES_COM_INPUTERROR_BACKGROUND','Błąd w kolorze tła');
define('_JOMRES_COM_CONFIGCOUNTRIES','Domyślny kraj w formularzu rezerwacyjnym');
define('_JOMRES_JAVASCRIPT_','Pozycje zaznaczone czerwoną gwiazdką są wymagane.');
define('_JOMRES_COM_SELFREGISTRATION','Właściciele mogą rejestrować swoje obiekty?');
define('_JOMRES_COM_SELFREGISTRATION_DESC','Ustaw na Tak, jeżeli chcesz aby właściciele mogli rejestrowac swoje obiekty bez interwencji administatora strony.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP1','Proszę podać kraj i region Twego obiektu.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_1','Proszę wprowadzić dane obiektu.');
define('_JOMRES_REGISTRATION_INSTRUCTIONS_STEP2_2','Pozycje zaznaczone czerwoną gwiazdką są wymagane.');
define('_JOMRES_REGISTRATION_AUDIT_CREATEPROPERTY','Obiekt dodany');
define('_JOMRES_REGISTRATION_NOTALLOWED',"Przykro nam, ale nie możesz dodać obiektu do systemu. Musisz być zalogowanym, zarejestrowanym użytkownikiem i nie możesz mieć już wczesniej dodanego obiektu.");
define('_JOMRES_REGISTRATION_CREATEDPROPERTY','Dodany obiekt: ');
define('_JOMRES_REGISTRATION_CREATEDPROPERTY_FORUSER','Właściciel: ');
// v1.4i
define('_JOMRES_COM_MONTHS_STARTOFYEAR','Pokaż kalendarz od początku roku?');
define('_JOMRES_COM_MONTHS_STARTOFYEAR_DESC','Pokazywany kalendarz dostępności rozpoczyna się od początku bieżącego roku.');
define('_JOMRES_NUMBEROFROOMSAVAILABLE','Ilość dostępnych pokoi');
define('_JOMRES_BACKTOPROPERTYDETAILSLINK','Powrót do informacji o obiekcie');
define('_JOMRES_FRONT_ROOMTYPES','Typy pokoi');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT','Limit przypadkowego wyszukiwania');
define('_JOMRES_SHOWGOOGLECURRENCYLINKS','Pokaż odsyłacz do przelicznika walut Google w liscie cenników?');
define('_JOMRES_CURRENCYCONVERSIONTEXT','Przelicz cene na :');
define('_JOMRES_COM_ALLOWHTMLEDITOR','Pozwól użytkownikom edytować używając  edytora html?');
// v2
define('_JOMRES_AJAXFORM_INSTRUCTIONS','Użyj tego formularza aby dokonać rezerwacji. Aby uzyskać dodatkowe informacje o danym polu ustaw kursor na ikonie "i". Modyfikuj szczegóły rezerwacji, takie jak daty przyjazdu i odjazdu, ilość osób, następnie wybierz pokój/je z listy dostępnych. Kliknij dowolny dostępny pokój, aby dodać go do rezerwacji. Następnie możesz dodać dowolną dostępną usługę dodatkową. Podaj też swoje dane teleadresowe. Jeżeli formularz zostanie poprawnie wypełniony, ukaże się przycisk, umożliwiający potwierdzenie rezerwacji.');
define('_JOMRES_AJAXFORM_INSTRUCTIONS_SRP','Użyj tego formularza aby dokonac rezerwacji. Aby uzyskać dodatkowe informacje o danym polu ustaw kursor na ikonie "i". Modyfikuj szczegóły rezerwacji, takie jak daty przyjazdu i odjazdu, ilość osób, następnie wybierz pokój/je z listy dostępnych. Kliknij dowolny dostępny pokój, aby dodac go do rezerwacji. Następnie możesz dodać dowolną dostępną usługę dodatkową. Podaj też swoje dane teleadresowe. Jeżeli formularz zostanie poprawnie wypełniony, ukaże się przycisk, umożliwiający potwierdzenie rezerwacji.');
define('_JOMRES_AJAXFORM_PARTICULARS','Szczególy rezerwacji');
define('_JOMRES_AJAXFORM_PARTICULARS_DESC','Określ szczegóły rezerwacji');
define('_JOMRES_AJAXFORM_AVAILABLE','Dostępność ');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC','Wybierz pokój');
define('_JOMRES_AJAXFORM_AVAILABLE_DESC_SRP','Sprawdź tutaj, czy obiekt jest w tym okresie dostępny.');
define('_JOMRES_AJAXFORM_EXTRAS','Opcjonale usługi dodatkowe');
define('_JOMRES_AJAXFORM_EXTRAS_DESC','Wybierz dowolne usługi dodatkowe, które chcesz dodać do rezerwacji');
define('_JOMRES_COM_PERDAY','Za noc');
define('_JOMRES_AJAXFORM_ADDRESS','Twój adres');
define('_JOMRES_AJAXFORM_ADDRESS_DESC','Podaj swoje dane. Wszystkie pola, za wyjątkiem numeru telefonu komórkowego, są wymagane');
define('_JOMRES_AJAXFORM_AVAILABLEROOMS','Dostępne pokoje');
define('_JOMRES_AJAXFORM_SELECTEDROOMS','Wybrane pokoje');
define('_JOMRES_AJAXFORM_EARLIESTPOSSIBLEARRIVALDATE','<br>Najwcześniejsza możliwa data przyjazdu: ');
define('_JOMRES_AJAXFORM_BILLING_ROOM','Za noc:');
define('_JOMRES_AJAXFORM_BILLING_ROOM_TOTAL','Razem:');
define('_JOMRES_AJAXFORM_BILLING_EXTRAS','Usługi dodakowe:');
define('_JOMRES_AJAXFORM_BILLING_TAX','Podatek:');
define('_JOMRES_AJAXFORM_BILLING_DISCOUNT','Zniżka:');
define('_JOMRES_AJAXFORM_BILLING_TOTAL','Suma ogólna:');
define('_JOMRES_AJAXFORM_BILLING_TOTALINPARTY','Gości');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION','Kliknij, aby dodać ten pokój do listy wyboru');
define('_JOMRES_AJAXFORM_CLICKHERECAPTION_REMOVE','Kliknij, aby usunąć ten pokój z listy wyboru');
define('_JOMRES_CONFIG_VARIANCES_CUSTOMERTYPES','Typ gościa');
define('_JOMRES_VARIANCES_TYPE','Typ');
define('_JOMRES_VARIANCES_TYPE_TT','Typ gości, np. dzieci w wieku 5-10 lat, student ');
define('_JOMRES_VARIANCES_NOTES','Uwagi');
define('_JOMRES_VARIANCES_NOTES_TT','Uwagi dotyczące danego typu gości');
define('_JOMRES_VARIANCES_MAXIMUM','Maksymalnie');
define('_JOMRES_VARIANCES_MAXIMUM_TT','Maksymalna ilość klientów, jaka może być wybrana w formularzu rezerwacyjnym');
define('_JOMRES_VARIANCES_ISPERCENTAGE','Procent');
define('_JOMRES_VARIANCES_ISPERCENTAGE_TT','Suma jest procentem z sumy podstawowej skalkulowanej dla pokoju. Jeżeli ustawione na Nie, podana kwota będzie dodana lub odjęta od ceny rezerwacji pokoju.');
define('_JOMRES_VARIANCES_POSNEG','Dodać wariant?');
define('_JOMRES_VARIANCES_POSNEG_TT','Kalkulowana kwota jest dodawana lub odejmowana od ceny rezerwacji pokoju. Ustaw na Nie, jeżeli chcesz, aby była to zniżka od ceny podstawowej. ');
define('_JOMRES_VARIANCES_VARIANCE','Wariant');
define('_JOMRES_VARIANCES_VARIANCE_TT','Wartość wariantu');
define('_JOMRES_MR_AUDIT_REORDER_CUSTOMERTYPE','Lista typów gości zmodyfikowana');
define('_JOMRES_MR_AUDIT_PUBLISH_CUSTOMERTYPE','Opublikowany typ gości');
define('_JOMRES_MR_AUDIT_DELETE_CUSTOMERTYPE','Usunięty typ gości');
define('_JOMRES_MR_AUDIT_INSERT_CUSTOMERTYPE','Utworzony typ gości');
define('_JOMRES_MR_AUDIT_UPDATE_CUSTOMERTYPE','Zmieniony typ gości');
define('_JOMRES_COM_MR_CUSTOMERTYPE_UPDATED','Zmieniony typ gości');
define('_JOMRES_COM_A_SHOWROOMSLISTLINK','Pokazać odsyłacz do listy pokoi na stronie informacyjnej obiektu?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL','Pokazać  <b>tylko</b> kalendarz dostępności/listę pokoi?');
define('_JOMRES_COM_A_SHOWONLYAVLCAL_DESC','Ustaw na Tak, jeżeli chcesz nie wyświetlać informacji o obiekcie, tak że lista pokoi/dostepność będą widoczne w części informacyjnej obiektu. Przeznaczone w zasadzie dla użytkowników wynajmujących obiekt typu apartament, domek itp.).');
define('_JOMRES_COM_A_MINIMUMINTERVAL','Minimalna długość pobytu');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC','Minimalna długość pobytu oferowana w formularzu rezerwacyjnym (tym samym w obiekcie).');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNO','Formularz rezerwacyjny pokazuje numery pokoi');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMNAME','Formularz rezerwacyjny pokazuje nazwy pokoi');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWTARIFFTITLE','Formularz rezerwacyjny pokazuje nazwę cennika');
define('_JOMRES_ORDER','Kolejność');
define('_JOMRES_REQUIREDFIELDS','Wymagane');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING','Dni do przyjazdu');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC','Minimalna ilość dni, jakia musi pozostać między datą dokonywania razerwacji a datą przyjazdu.');
define('_JOMRES_DTV','Warianty typu daty');
define('_JOMRES_DTV_DOW','Dzień tygodnia');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPE','Domyślny typ gości');
define('_JOMRES_COM_A_DEFAULTNUMBEROFFIRSTGUESTTYPEDESC','Domyślny typ gości (o ile używasz rozróżnienia typów gości), nadawany pierwszemu gościowi w formularzu rezerwacyjnym.');
define('_JOMRES_COM_A_REGISTEREDUSERSONLYBOOK','Rezerwacji on-line może dokonać tylko zarejestrowany użytkownik?');
define('_JOMRES_REGISTEREDUSERSONLYBOOK','Przykro nam, musisz być zarejestrowanym użytkownikiem, aby móc rezerwować on-line. Kliknij tutaj, aby się zarejestrować. ');
define('_JOMRES_COM_AVLCAL_CURRENTBOOKINGFONT','Kolor odsyłaczy do aktualnych rezerwacji');
define('_JOMRES_COM_AVLCAL_WEEKENDBORDER','Ramki tygodni');
define('_JOMRES_COM_AVLCAL_BOOKING_KEY','Pokój zarezerwowany');
define('_JOMRES_COM_AVLCAL_BLACK_KEY','Wyłączenie');
define('_JOMRES_COM_A_DEPOSIT_DEPOSITROUNDUP','Zaokrąglać przedpłatę do pełnej kwoty?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT','Przedpłata wymagana?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY','Zapisać cennik jako opłaty tygodniowe?');
define('_JOMRES_COM_A_TARIFFPRICESAREWEEKLY_DESC','Masz możliwość zapisać cennik jako opłaty dzienne lub tygodniowe. Jeżeli chcesz zapisu tygodniowego ustaw na Tak.');
define('_JOMRES_COM_MR_LISTTARIFF_ROOMRATEPERWEEK','Cena za tydzień');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING','Stałe daty przyjazdu powtarzają się: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC','Jeżeli wybrano stałe daty przyjazdu, daty te bedą pokazywane na liście wyboru w trakcie procesu rezerwacji');
define('_JOMRES_BOOKINGFORM_MONITORING_SMOKING_INVALID','Opcja dla palących niedostępna');
define('_JOMRES_BOOKINGFORM_MONITORING_ARRIVALDATE_INVALID','Błędna data przyjazdu');
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID','Błędna data wyjazdu');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1','Okres rezerwacji zbyt krotki. Między datą przyjazdu i wyjazdu musi być minimu dni:');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT2','Twój okres rezerwacji wynosi');
define('_JOMRES_BOOKINGFORM_MONITORING_GUEST_TYPE_INCORRECT','Błędny typ gościa');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_GUEST_NUMBERS','Wybierz odpowiednią ilość/typ gościa');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_IN_PARTY_FOR_TARIFFS','Rezerwacja dotyczy zbyt dużej ilości osób dla dostępnego cennika');
define('_JOMRES_BOOKINGFORM_MONITORING_MORE_ROOMS_THAN_GUESTS','Wybrano więcej pokoi, niż ilość osób');
define('_JOMRES_BOOKINGFORM_MONITORING_TOO_MANY_GUESTS_FOR_BEDS','Zbyt dużo osób w stosunku do dostępnych miejsc noclegowych');
define('_JOMRES_BOOKINGFORM_MONITORING_CHOOSE_MORE_ROOMS','Musisz wybrać więcej pokoi');
define('_JOMRES_BOOKINGFORM_MONITORING_SELECT_A_ROOM','Wybierz pokój');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_FIRSTNAME','Wymagane jest imię');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_SURNAME','Wymagane jest nazwisko');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_HOUSENO','Wymagany jest nr domu');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_STREET','Wymagana jest nazwa ulicy');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_TOWN','Wymagana jest nazwa miejscowości');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_REGION','Wymagane jest województwo/region');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_POSTCODE','Wymagany jest kod pocztowy');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_COUNTRY','Wymagany jest kraj');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_LANDLINE','Wymagany jest numer telefonu stacjonarnego');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_CELLPHONE','Wymagany jest numer telefonu komórkowego');
define('_JOMRES_BOOKINGFORM_MONITORING_REQUIRED_EMAIL','Wymagany jest adres E-mail');
define('_JOMRES_BOOKINGFORM_MONITORING_EMAIL_INVALID','Adres E-mail jest błędny');
define('_JOMRES_BOOKINGFORM_MONITORING_CANNOT_VALIDATE_EMAIL','Nie udało się sprawdzić adresu E-mail');
define('_JOMRES_SRP_WEHAVEVACANCIES','Mamy wolne miejsca!');
define('_JOMRES_BOOKINGFORM_NOROOMSSELECTEDYET','Jeszcze nie wybrano pokoi');
define('_JOMRES_BOOKING_NUMBER','Rezerwacja nr');
define('_JOMRES_COM_INPUTOKTOBOOK_BACKGROUND','Ok dla rezerwacji, tło pola tekstowego');
define('_JOMRES_COM_DUMPTEMPLATEDATA','Zmienne szablonu?');
define('_JOMRES_COM_DUMPTEMPLATEDATA_DESC','Uaktywnij, aby umożliwić wpisywanie zmiennych DHTML do szablonu strony. Pomocne, jeżeli chcesz widzieć, czy ten konkretny element jest dostępny do użycia w danym szablonie.');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE','Kwota jest procentem');
define('_JOMRES_COM_A_SUPPLIMENTS_SINGLEPERSON_ISPERCENTAGE_DESC','Ustaw na Tak, jeżeli cena za pojedyncze wykorzystanie jest procentem pełnej ceny. Jeżeli nie, to cena zostanie ustalona kwotowo.');
//v2rc2
define('_JOMRES_COM_LIMITROOMSLIST','Ograniczenie dostępności pokoi/cenników');
define('_JOMRES_COM_LIMITROOMSLIST_DESC','Wprowadż tą daną aby ograniczyć ilość dostępnych pokoi i cenników, pokazywanych w formularzu rezerwacyjnym. Jeżeli nie chcesz ograniczenia, ustaw na zero. ');
define('_JOMRES_SRP_WEHAVENOVACANCIES','Aktualnie brak wolnych miejsc!');
// Translate from here
// Introduced in v2.5
// v2.6
define('_JOMRES_BOOKITNOW','Book it now: ');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING','Global editing mode?');
define('_JOMRES_COM_JRCONFIG_GLOBALEDITING_DESC','Take care with this function. If set to Yes, then the editing mode will affect the custom text for ALL properties in the system for the constant you are editing.');
define('_JOMRES_COM_JRCONFIG_GLOBALCURRENCY','Global currency symbol');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED','Component wrapped');
define('_JOMRES_COM_JRCONFIG_ISWRAPPED_DESC','Set this to Yes if the component is wrapped so that module and header areas are not to be seen');
define('_JOMRES_COM_USERIS_SUPERPROPERTYMANAGER','Super Property Manager');
define('_JOMRES_COM_WEEKENDONLY','Weekends only');
define('_JOMRES_COM_WEEKENDDAYS','Weekend days');
define('_JOMRES_COM_WEEKENDDAYS_DESC','Set your weekend days. Tariffs that allow or disallow weekends will take this setting into account when generating the rooms list.');
define('_JOMRES_EDITPROPERTY_SELECTCOUNTRY','Select your country before adding any property information');
define('_JOMRES_EDITPROPERTY_SAVEBEFOREUPLOAD','Save your property changes before uploading a property image');
define('_JOMRES_TARIFFSFROM','Prices from - ');
define('_JOMRES_SEARCH_ALL','All');
define('_JOMRES_SEARCH_GEO_COUNTRYSEARCH','Search by country');
define('_JOMRES_SEARCH_GEO_REGIONSEARCH','Search by region');
define('_JOMRES_SEARCH_GEO_TOWNSEARCH','Search by town');
define('_JOMRES_SEARCH_FEATURE_INFO','Feature search.');
define('_JOMRES_SEARCH_BUTTON','Search');
define('_JOMRES_SEARCH_DESCRIPTION_INFO','Enter a search word into the box and press the button.');
define('_JOMRES_SEARCH_DESCRIPTION_LABEL','Search word(s): ');
define('_JOMRES_SEARCH_AVL_INFO','Please enter your intended arrival and departure dates and press the button to find properties that have accommodation available on your chosen dates.');
define('_JOMRES_SEARCH_PTYPES','List all properties by property type.');
define('_JOMRES_SEARCH_RTYPES','List all properties by room type.');
define('_JOMRES_SORTORDER_DEFAULT','Default');
define('_JOMRES_SORTORDER_PROPERTYNAME','Property Name');
define('_JOMRES_SORTORDER_PROPERTYREGION','Property Region');
define('_JOMRES_SORTORDER_PROPERTYTOWN','Property Town');
define('_JOMRES_SORTORDER_STARS','Stars');
define('_JOMRES_PATHWAY_PROPERTYLIST','Property list');
define('_JOMRES_PATHWAY_PROPERTYDETAILS','Property details - ');
define('_JOMRES_PATHWAY_BOOKINGFORM','Booking form');
define('_JOMRES_BOOKINGFORM_UPDATEADDRESSBUTTON','Update your address details');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY','Re-checking room availability<br/>(Room selection will be reset)');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_RECHECKINGROOMAVIALABILITY_SRP','Re-checking availability');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGEXTRA','Modifying your optional extras');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_CHANGINGROOMSELECTION','Changing your room selection');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_UPDATINGADDRESS','Updating your address details');
define('_JOMRES_BOOKINGFORM_BLOCKUIMESSAGES_ADDRESSINPUTERROR','Sorry, one or more address fields are incorrect.');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMIMAGE','Room image');
define('_JOMRES_CURRENCYFORMAT','Currency format');
define('_JOMRES_MANAGEROPTIONSASIMAGES','Show Managers\'s options as images');
define('JOMRES_COM_A_SEARCHOPTIONSTAB','Search options');
define('JOMRES_COM_A_AVAILABLELOGS','Available Logs');
define('JOMRES_COM_A_LOGS_NOENTRIES','No log entries. This is normal, you need to manually modify jomres.php to trigger logging');
define('JOMRES_COM_A_MESSAGE','Message');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.6.3
define('JOMRES_COM_A_TARIFFMODE_NORMAL','Normal');
define('JOMRES_COM_A_TARIFFMODE_ADVANCED','Advanced');
define('JOMRES_COM_A_TARIFFMODE_TARIFFTYPES','Micromanage');
define('JOMRES_COM_A_TARIFFMODE','Tariff Configuration Mode');
define('JOMRES_COM_A_TARIFFMODE_DESC',"<b>Warning: Switching between different tariff types may result in loss of data. See the note below regarding this</b>.
<br/><br/>
You have three options as to how you configure your tariffs.<br/>
Normal mode: You will have one tariff for each room type that is valid for the next 10 years.<br/>
Micromanage: You can modify the price for each and every day for each room/property type. <br/>
Advanced: The \"old\" Jomres method of managing tariffs. <br/>
<br/>
The different tariff modes allow you to choose the method of configuring tariffs that suits you best.<br/>
Normal mode is the most simplistic but it's the easiest to understand because it will cross reference rooms and tariffs to room/property types and allows you to configure rooms and prices on the same page.<br/>
Micro manage allows you to vary the rates on a day to day basis without having to manage reams of tariffs, it is done by cross referencing lots of different tariffs with each other. This results in a number of tariffs being created for you covering a period of time, but you can not layer tariffs over each other.<br/>
Advanced mode lets you create a room and associate it with a room type. You then create a tariff and associate THAT with a room type. Using this method it is possible to \"layer\" tariffs over each other, for example a room type \"Double bed\" can have one tariff for bed and breakfast, and another for bed, breakfast and evening meal. The advanced method requires a little more attention to detail because it is possible to dis-associate a room or tariff from a room/property type, or to incorrectly set valid from and to dates, but it does give you configuration options that the other modes do not offer. <br/>
<br/>
Because Normal and Micromanage modes require a specific set up of rooms and tariffs for the tariff mode to work the system may need to reset some data to make the current tariff configurations compatible with the current tariff editing mode.<br/>
<br/>
Normal -> Advanced. No change. Existing tariffs are retained.<br/>
Normal -> Micromanage. All existing tariffs are removed.<br/>
Advanced -> Normal. All existing tariffs are removed.<br/>
Advanced -> Micromanage. All existing tariffs are removed.<br/>
Micromanage -> Advanced. All existing cross references between tariffs are removed, but the tariffs themselves will remain.<br/>
Micromanage -> Normal. All existing cross references and tariffs are removed.<br/>");
define('_JOMRES_COM_A_LISTROOMSINPROPERTYDETAILS','Show rooms list in property details page?');
define('JOMRES_PROPERTYTYPE','Property type');
define('JOMRES_COM_A_SRPONLY','SRP only');
define('JOMRES_MAXPEOPLEINROOM','Max people per room');
define('JOMRES_MAXPEOPLEINBOOKING','Max people in booking');
define('_JOMCOMP_BOOKINGNOTES_ADD','Add note');
define('_JOMCOMP_BOOKINGNOTES_EDIT','Edit note');
define('_JOMCOMP_BOOKINGNOTES_DELETE','Delete note');
define('_JOMCOMP_BOOKINGNOTES_VIEW','View notes');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE','Added new note');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_EDIT','Edited note');
define('_JOMCOMP_BOOKINGNOTES_AUDITMESSAGE_DELETE','Deleted note');
define('_JOMCOMP_MYUSER_MENUTITLE','My options');
define('_JOMCOMP_MYUSER_LISTBOOKINGS','List Bookings');
define('_JOMCOMP_MYUSER_MYBOOKINGS','My Bookings');
define('_JOMCOMP_MYUSER_VIEWBOOKING','View Booking');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES','View Favourites');
define('_JOMCOMP_MYUSER_VIEWFAVOURITES_NONE','You haven\'t added any favourites yet!');
define('_JOMCOMP_MYUSER_ADDTOFAVOURITES','Add to Favourites');
define('_JOMCOMP_MYUSER_PROPERTYTYPE','Property type');
define('_JOMCOMP_MYUSER_PUBLISHEDPROPERTIES','Properties on site');
define('_JOMCOMP_WISEPRICE_TITLE','Wise price');
define('_JOMCOMP_WISEPRICE_ACTIVE','Active');
define('_JOMCOMP_WISEPRICE_TITLE_DESC','This plugin allows you to enable and configure your room prices dynamically.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL','Most businesses will recalculate room prices based on the number of rooms of a required type that are available on a given date. This allows them to offer discounts on a room type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of rooms of a selected type are available in the property on a given day.<br/> The days threashold defines the number of days that the arrival date must be within before room prices are adjusted by this feature, then the percentages options allow you to configure the percentage of rooms that can be available before a given discount is applied.');
define('_JOMCOMP_WISEPRICE_THREASHOLD','Threashold (number of days between arrival date and today)');
define('_JOMCOMP_WISEPRICE_PERCENTAGE10','Percentage rooms occupied < 10%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE25','Percentage rooms occupied < 25%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE50','Percentage rooms occupied < 50%');
define('_JOMCOMP_WISEPRICE_PERCENTAGE75','Percentage rooms occupied < 75%');
define('_JOMCOMP_WISEPRICE_DISCOUNT','Discount %');
define('_JOMCOMP_WISEPRICE_HASBEENDISCOUNTED',' has been discounted from ');
define('_JOMCOMP_WISEPRICE_TO',' to ');
define('_JOMCOMP_WISEPRICE_NOTDISCOUNTED',' Room price not discounted ');
define('JOMRES_COM_A_MAPSKEY','Google maps API key');
define('JOMRES_COM_A_MAPSKEY_DESC','Get can get a google maps API key from <a href="http://www.google.com/apis/maps/signup.html" target="_blank">Google maps</a>. Once you have input your map key here, Jomres will show the map in your Property Details page.');
define('JOMRES_COM_A_USE_SSL','Use SSL in booking form?');
define('JOMRES_COM_A_USE_SSL_DESC','You need to ensure that you have a valid SSL certificate for ');
define('_JOMCOMP_LASTMINUTE_CPANEL','Last minute');
define('_JOMCOMP_LASTMINUTE_ACTIVE','Active?');
define('_JOMCOMP_LASTMINUTE_ACTIVE_DESC','Set this to Yes if you want to offer last minute deals.');
define('_JOMCOMP_LASTMINUTE_THREASHOLD','Threshold');
define('_JOMCOMP_LASTMINUTE_THREASHOLD_DESC','If a booking is made and the arrival date is only N days from the date of booking, then the discount can be applied');
define('_JOMCOMP_LASTMINUTE_DISCOUNT','Discount');
define('_JOMCOMP_LASTMINUTE_DISCOUNT_DESC','In percent');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION1','A discount has been applied to this booking!');
define('_JOMCOMP_LASTMINUTE_BOOKINGCONFIRMATION2','The cost of the stay has been reduced by ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_PRE','This property offers a last minute discount of  ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_MID',' percent if you book to arrive before ');
define('_JOMCOMP_LASTMINUTE_ORMORE',' percent or more if you book to arrive before ');
define('_JOMCOMP_LASTMINUTE_PROPERTYLIST_POST','. Book now to make the most of this offer!');
define('JOMRES_COM_A_VERBOSETARIFFINTO','Verbose tariff info');
define('JOMRES_COM_A_VERBOSETARIFFINTO_DESC','Set this to Yes to show more detailed tariff information in the property details/tariff popup');
define('JOMRES_COM_A_MINIMALCONFIG','Minimise configuration options');
define('_JOMCOMP_AMEND','Amend Booking - Property Selection');
define('_JOMCOMP_AMEND_SELECTPROPERTY','Select New Property');
define('_JOMCOMP_AMEND_HEADER','Original Contract:');
define('_JOMCOMP_AMEND_DEPOSITPAID','Deposit Paid');
define('_JOMCOMP_AMEND_DEPOSITDUE','Deposit Not Paid');
define('_JOMCOMP_AMEND_OVERRIDE_TOTAL','Override Total');
define('_JOMCOMP_AMEND_OVERRIDE_DEPOSIT','Override Deposit');
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// Jomres 2.7.5
define('_JRPORTAL_CANCEL','Cancel');
define('_JRPORTAL_CPANEL','JRPortal Control Panel');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE','Default Commission rate');
define('_JRPORTAL_CONFIG_DEFAULT_CRATE_DESC','Choose the default commission rate that will be applied to a property in the event that another commission rate is not otherwise set.');
define('_JRPORTAL_CPANEL_LISTCRATES','List Commission Rates');
define('_JRPORTAL_CPANEL_PATETITLE','Commission Rates');
define('_JRPORTAL_CRATE_TITLE','Title');
define('_JRPORTAL_CRATE_TYPE','Type');
define('_JRPORTAL_CRATE_VALUE','Comission rate');
define('_JRPORTAL_CRATE_CURRENCYCODE','Currency code');
define('_JRPORTAL_CPANEL_LISTPROPERTIES','List Properties');
define('_JRPORTAL_PROPERTIES_PROPERTYNAME','Property name');
define('_JRPORTAL_PROPERTIES_PROPERTYADDRESS','Property address');
define('_JRPORTAL_PROPERTIES_LEGEND','Properties who\'s background colour is red have not yet had a commission rate applied to them.');
define('_JRPORTAL_STATS_PATETITLE','Statistics');
define('_JRPORTAL_STATS_STATTYPE','Statistics for: ');
define('_JRPORTAL_STATS_STATTYPE_PROPERTIES','Properties - Clicks');
define('_JRPORTAL_PROPERTIES_VIEWPROPERTY','Property view');
define('_JRPORTAL_PROPERTIES_NUMBEROFBOOKINGS','Number of bookings');
define('_JRPORTAL_PROPERTIES_VALUEOFBOOKINGS','Value of bookings');
define('_JRPORTAL_PROPERTIES_COMMISSIONESTIMATE','Commission estimate');
define('_JRPORTAL_PROPERTIES_COMMISSIONRATE','Commission Rate');
define('_JRPORTAL_CPANEL_LISTBOOKINGS','List bookings');
define('_JRPORTAL_LISTBOOKINGS_HEADER_PROPERTY_ID','Property id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_GUEST_ID','Guest id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_AFFILIATE_ID','Affiliate id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_INVOICE_ID','Invoice id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_BOOKINGTOTAL','Booking total');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_ID','Contract id');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CONTRACT_NUMBER','Contract number');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CURRENCYCODE','Currency Code');
define('_JRPORTAL_LISTBOOKINGS_HEADER_CREATED','Created');
define('_JRPORTAL_LISTBOOKINGS_HEADER_ARCHIVED','Archived');
define('_JRPORTAL_LISTBOOKINGS_HEADER_DATEARCHIVED','Date archived');
define('_JRPORTAL_CPANEL_ADD_ADHOC_ITEM','Add item to bill');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEMANAGER','Manager to invoice');
define('_JRPORTAL_ADD_ADHOC_ITEM_CHOOSEPROPERTY','Associated property (if applicable)');
define('_JRPORTAL_ADD_ADHOC_ITEM_VALUE','Value');
define('_JRPORTAL_ADD_ADHOC_ITEM_DESCRIPTION','Description');
define('_JRPORTAL_ADD_ADHOC_ITEM_SUCCESS',"Successfully inserted billing item into ");
define('_JRPORTAL_ADD_ADHOC_ITEM_VIEWNBILLORDERS',"View orders");
define('_JRPORTAL_ADD_ADHOC_ITEM_FAILURE',"Failed to insert billing item into ");
define('_JRPORTAL_ADD_ADHOC_ITEM_NOVALUE',"Error, you didn't set a value for the bill");
define('_JOMRES_COM_PTYPES_PTYPE_DESC_FURTHER','You can have property type specific language files by setting the description to the name of a sub folder, e.g. "yachtbrokerage" and copying a language file to that subfolder. You can then modify that language file for this property type so rooms become, for example, DVDs, etc.');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE1','You cannot delete this property as it is the only property that you have access to. If you want to disable it, please use the un-publish feature in your toolbar. ');
define('_JOMRES_EDITPROPERTY_CONNOTDELETE2','If this is a demo installation and you intend to upgrade to Jomres Solo (one property only limit) then you should create a new property first, then delete this one before changing your license key to the Solo license key that you will be assigned on purchase. ');
define('_JOMRES_COM_EMAILERRORS',"Email error log messages?");
define('_JOMRES_COM_EMAILERRORS_DESC',"Set this to Yes if you want to copy jomres.net automatically when an error log message is created. This allows us to be proactive in our approach to dealing with potential problems, hopefully resolving any issues before you are even aware of them. Note, this feature is disabled on 'localhost'. ");
define('_JOMRES_COM_ISTHISANMRP',"Is this property a hotel/bed and breakfast/guest house/pension? ");
define('_JOMRES_COM_ISTHISANMRP_DESC',"Configuration options differ depending on if you are renting out rooms in a property, or the property itself. Select MRP if you are offering rooms, select SRP if you are offering the entire property.ring the entire property. ");
// Jomres v3.0.6
define('_JOMRES_COM_JOMRESEMAILCHECK',"Use Jomres email address checker? ");
define('_JOMRES_COM_JOMRESEMAILCHECK_DESC',"Enforces a stricter check on emails sent. Some secure web servers will throw a 500 internal error if you try to send an email to a non-existant email address. Switching this on allows us to use checkdnsrr features of php before attempting to send an email, preventing these 500 errors. ");
// Jomres v3.1
define('_JOMRES_AJAXFORM_ACCOMMODATION_TOTAL',"Accommodation Total");
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS',"night(s) at");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERROOM',"per room ");
define('_JOMRES_AJAXFORM_EXTRAS_TOTAL',"Enhance Your Stay Total ");
define('_JOMRES_AJAXFORM_PRICE_SUMMARY',"Price Summary ");
define('_JOMRES_CONFIRMATION_ALERT',"Please read and agree to ");
define('_JOMRES_CONFIRMATION_HEADER',"A summary of your booking is shown below.<br /> To make any changes, please click on the Amend Reservation button. ");
define('_JOMRES_CONFIRMATION_AMENDTEXT',"If you need to change any of the above information then please click here");
define('_JOMRES_CONFIRMATION_AMEND',"Amend Reservation");
define('_JOMRES_CONFIRMATION_SPECIALS',"Please enter any special requests in the box below.");
define('_JOMRES_CONFIRMATION_TERMS_PRETEXT',"I confirm that the above information is correct and agree to the ");
define('_JOMRES_AJAXFORM_ACCOMMODATION_PERPERSON',"per person per night ");
// Jomres 3.1.10
define('_JOMRES_COM_A_SITELANGUAGE_FILE',"Default language file");
define('_JOMRES_COM_A_SITELANGUAGE_FILE_DESC',"Choose the default language file that Jomres should use if the language hasn't been set by Joomfish.");
// Jomres 3.1.11
// Jomres 3.1.13
if (!defined('_PN_OF'))
	define('_PN_OF','of');
if (!defined('_PN_START'))
	define('_PN_START','Start');
if (!defined('_PN_PREVIOUS'))
	define('_PN_PREVIOUS','Prev');
if (!defined('_PN_NEXT'))
	define('_PN_NEXT','Next');
if (!defined('_PN_END'))
	define('_PN_END','End');
if (!defined('_PN_RESULTS'))
	define('_PN_RESULTS','Results');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_TITLE','Note that this is not a booking form, instead you are sending an email.<br/>Please enter the message you\'d like to send to ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL','Contact hotel');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_SUBJECT','Property enquiry from ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_THANKS','Thank you for your enquiry, your message has been sent to the property\'s contact email address, and copied to your own address for your records. They will respond to you as soon as possible with their reply.');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_REGARDING',' regarding ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG1','Type the characters that you see in the box');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_MSG2','I cannot read the characters. Generate a ');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_BUTTONTEXT','Send');
define('_JOMRES_FRONT_MR_MENU_CAPTCHA_REFRESHBUTTONTEXT','new image');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_ENQUIRY','Enquiry');
define('_JOMRES_BOOKINGFORM_LOOKRIGHT','Please select your required accommodation from the list on the right');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS','Min rooms already selected');
define('_JOMRES_COM_MR_EB_ROOM_MINROOMS_DESC','Minimum number of rooms already selected in booking before tariff/room type combo can be offered. Allows you to have discounted tariffs when more than N rooms are already selected. ');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS','Max rooms already selected');
define('_JOMRES_COM_MR_EB_ROOM_MAXROOMS_DESC','Maximum number of rooms already selected in booking before tariff/room combo is no longer offered. Allows you to stop offering this room type/tariff combination once N rooms have been selected in the booking form. ');
define('_JOMRES_COM_SPS_EDITROOM_DESC','Note that Single person suppliments set here will not be used if Single Person Suppliments are set to Yes in General Configuration. The settings here are an alternative to having flat rates Single Person Suppliements, not an addition to the flat rate SPS.');
define('_JOMRES_AVLCAL_NOBOOKINGS',"Available"); 
define('_JOMRES_AVLCAL_QUARTER',"Some bookings");
define('_JOMRES_AVLCAL_HALF',"Half booked");
define('_JOMRES_AVLCAL_THREEQUARTER',"Mostly booked");
define('_JOMRES_AVLCAL_FULLYBOOKED',"Fully booked");
define('_JOMRES_COM_SEF_URL_PREFIX','Url prefix');
define('_JOMRES_COM_SEF_URL_PREFIX_DESC','This is the first item displayed after the domain - Change to what you require - If you don\'t want to use it then blank it out');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY','View property task alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_VIEWPROPERTY_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING','dobooking task alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_DOBOOKING_DESC','');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH','Search task alias');
define('_JOMRES_COM_SEF_TASK_ALIAS_SEARCH_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY','Add country to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION','Add region to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN','Add town to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE','Add property type to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME','Add property name to url');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTYNAME_DESC','');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID','Append property id to property name');
define('_JOMRES_COM_SEF_PROPERTY_URL_PROPERTY_ID_DESC','if property name is set to No then the id will not be used. If set to yes then the url will look like fawlty_towers-1');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY','Search URL Structure - Add country to url');
define('_JOMRES_COM_SEF_SEARCH_URL_COUNTRY_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY','Search URL Structure - Default country');
define('_JOMRES_COM_SEF_DEFAULT_COUNTRY_DESC','If all your properties are in one country then you will not have country in the search - enter a default country here if you want to display a country');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION','Search URL Structure - Add region to url');
define('_JOMRES_COM_SEF_SEARCH_URL_REGION_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_REGION','Search URL Structure - Default region');
define('_JOMRES_COM_SEF_DEFAULT_REGION_DESC','If all your properties are in one region then you will not have region in the search - enter a default region here if you want to display a region');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN','Search URL Structure - Add town to url');
define('_JOMRES_COM_SEF_SEARCH_URL_TOWN_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_TOWN','Search URL Structure - Default town');
define('_JOMRES_COM_SEF_DEFAULT_TOWN_DESC','');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE','Search URL Structure - Property type');
define('_JOMRES_COM_SEF_SEARCH_URL_PTYPE_DESC','');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE','Search URL Structure - Default property type');
define('_JOMRES_COM_SEF_DEFAULT_PTYPE_DESC','Used in url if search is for all property types');
define('_JOMRES_COM_SEF_NOTINSTALLED','Either she404sef is not installed, or you haven\'t yet copied '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'jomres'.JRDS.'libraries'.JRDS.'jomres'.JRDS.'cms_specific'.JRDS.'joomla15'.JRDS.'other_component_files'.JRDS.'sh404sef'.JRDS.'com_jomres.php to '.JOMRESCONFIG_ABSOLUTE_PATH.JRDS.'components'.JRDS.'com_sh404sef'.JRDS.'sef_ext. Once you have installed sh404sef and/or copied that file over, then you will be able to configure your sef urls from here. ');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO','Autodetect Javascript calendar language');
define('_JOMRES_COM_A_CALENDARLANGUAGE_AUTO_DESC','Enable autodetection of language for the javascript calendars? If we cannot autodetect the language then we will fall back to the language configured below');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERWEEK','Per week');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYS','Per day');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERBOOKING','Per booking');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERBOOKING','Per person per booking');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERDAY','Per person per day');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERPERSONPERWEEK','Per person per week');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSMINDAYS','Per days (min days)');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERDAYSPERROOM','Per days X rooms selected');
define('_JOMRES_REGISTRYREBUILD','Rebuild minicomponent registry');
define('_JOMRES_REGISTRYREBUILD_NOTES',"Normally the Jomres plugin registry is rebuilt automatically whenever you view the plugin manager and add or remove a plugin, however it's possible that you cannot use these features for some reason, therefore you can use this function to rebuild the registry manually. If you have access to the Plugin Manager and Upgrades feature then it's unlikely that you will need to use this function. You will need to rebuild the plugin registry whenever you add a new mini-component and didn't use the Plugin Manager to add it.");
define('_JOMRES_REGISTRYREBUILD_SUCCESS','Registry rebuilt successfully');
define('_JOMRES_REGISTRYREBUILD_FAILURE','There was an error with rebuilding the registry of minicomponents. You should check your Jomres error log to see if there is a record of what triggered the error.');
define('_JOMRES_SEARCH_PRICERANGES','Search by price range.');
define('JOMRES_WORD_SAVING','Saving...');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS','Use Composite Property details?');
define('_JOMRES_COM_COMPOSITE_PROPERTY_DETAILS_DESC','Jomres 3.3 introduces the composite property details where all of the property details output is sent to one template file (composite_property_details.html). If you do not wish to use this set it to No (only existing users are expected to set this to No, new users will probably want to leave it set to Yes)');
define('_JOMRES_PROFILELIST_INSTRUCTIONS','This is a list of all users on the system. Non-property managers will have a Guest icon, property managers will have Reception/Property Manager/Super property manager icons.<br/>When Jomres is first installed "admin" is automatically added as a property manager and is considered an authorised user.<br/>Non-super property managers must be assigned to at least one property otherwise they will see an error when they try to log on and use Jomres.<br/>Once a user is authorised then you can edit their profiles, assign them to propertys or give them super property manager rights.<br/>To authorise a user, click on the red Cross next to their name. To unauthrorise them, click the green Tick.<br/>To assign users to specific properties only, or give them super property manager rights, authorise them then click the edit icon (which is only visible once they\'ve been authorised). Users who\'ve registered their property(s) themselves will be automatically assigned to those propertys. Super property managers automatically have rights over all properties, and will see all configuration options even if the minimised configuration option is set in Site Config.');
define('_JOMRES_PROFILEEDIT_INSTRUCTIONS','Here you can assign a manager to certain propertys. Ensure, if they\'re not going to be a super property manager, that they have rights to at least one property otherwise they will see an error when they log in. To give a receptionist/property manager rights over only certain propertys, ensure that the Super Property Manager dropdown is not set to Yes.');
define('_JOMCOMP_MYUSER_VIEWBOOKINGS_NONE','You haven\'t made any bookings yet!');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_TAB','Property type');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE','Edit your property type');
define('_JOMRES_COM_MR_VRCT_PROPERTY_TYPE_INFO','Select your property type');
define('_JOMRES_COM_LOGGING','Jomres logging');
define('_JOMRES_COM_LOGGING_WARNING','These options allow you to enable/disable logging within Jomres. Error logging is always enabled, but other logs such as Booking, Gateway, System and Request logs can be switched on and off. You are advised that <b>the ability to enable this logging is provided purely as a way of making debugging easier but it carries a big security risk</b> as it is easy for outside users to view your logs without being authorised therefore you are advised to leave it switched off most of the time. If you have enabled logging, then when you have disabled it, you should also ensure that the <i>'.JOMRESPATH_BASE.JRDS.'temp'.JRDS.'</i> folder does not contain any old log files. Note that enabling logging will also significantly slow your sytem down as it collects a lot of information.');
define('_JOMRES_COM_LOGGING_BOOKING','Booking form logging (Booking engine logs) ');
define('_JOMRES_COM_LOGGING_GATEWAY','Gateway logs (eg paypal etc) ');
define('_JOMRES_COM_LOGGING_REQUEST','Request log (all incoming server requests)');
define('_JOMRES_COM_LOGGING_SYSTEM','System (misc log) ');
define('_JOMRES_COM_LOGGING_JRPORTAL','JR Portal (mainly for recording commission etc) ');
define('_JOMRES_FRONT_MR_MENU_CONTACTHOTEL_YOUR_ENQUIRY','Your enquiry...');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWROOMTYPEIMAGE','Booking form room list show room type image');
define('_JOMRES_COM_A_LISTLIMIT','Property List limit');
define('_JOMRES_COM_A_LISTLIMIT_DESC','The number of propertys to show on a page after a search');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE','Integrated search feature');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TITLE_DESC','The Jomres integrated search feature allows your users to search through Jomres propertys according to a set of functions. If you have already used the search features of Jomres in Joomla you will be familiar with these settings.<br/>This feature allows us to offer search handling within Jomres for those users who don\'t want to use Joomla search modules, or for other CMS users who\'s CMS doesn\'t have it\'s own Jomres search modules.<br/>Just remember that if you choose to search for something via a link (ie not a dropdown) then other search options will not be implemented, only the element that corresponds with the link that you clicked.<br/>Note that by default the layout of this integrated search isn\'t very pretty. That\'s because the template file that performs the layout has to include all possible options, some of which are incompatible. To improve the layout and achieve the look you desire, you will need to edit <b>srch.html</b> in the folder <b>'.JOMRES_TEMPLATEPATH_FRONTEND.'</b> ');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE','Activate this feature?');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ENABLE_DESC','If this feature is enabled, then any call to Jomres that shows the property list will mean that the search options are also shown.');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS','Use columns');
define('_JOMRES_COM_A_INTEGRATEDSEARCH_USECOLS_DESC',"Any search option that you have defined as link type (where pertinent) will be shown as columns (IE br put on the end of the link)");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS',"Feature columns");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_FEATURECOLS_DESC',"The number of feature icons that can be shown before a br is inserted to go to next row.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO',"Search region by select combo dropdown");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_SELECTCOMBO_DESC',"Offer a search dropdown to filter through countries/regions/towns. If you are going to use this feature then you're best off not using the region/town searches below.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME',"Search by property name");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_DESC',"Show the search by property name input.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYNAME_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_TOWNREGION',"Search by town/region");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_DESC',"Show the search by region input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_REGION_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE',"Search by property type");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_DESC',"Show the search by property type input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_PROPERTYTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE',"Search by room type");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_DESC',"Show the search by room type input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_ROOMTYPE_ASDROPDOWN_DESC',"Set this to no to show the list as links");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES',"Search by features");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_DESC',"Show the search by feature input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN',"Show as dropdown?");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYFEATURES_ASDROPDOWN_DESC',"Set this to no to show the list as tooltip images and checkboxes");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION',"Search by description");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYDESCRIPTION_DESC',"Show the search by description input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY',"Search by availability");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYAVAILABILITY_DESC',"Show the search by availability input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES',"Search by price ranges");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYPRICERANGES_DESC',"Show the search by price ranges input");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS',"Price range increments");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_RANGEINCREMENTS_DESC',"Jomres will look at all the values in the tariffs then work out a series of price ranges based on the increments value you set here.");
define('_JOMRES_A_GLOBAL_SEARCHOPTION_RANDOMLIMIT_DESC','By default, if a property is not selected in Jomres it will perform a search. If this search was not triggered by a search module then that search will produce random results (deliberately). This option allows you to limit the number of returns in that random search.');
define('_JOMRES_COM_A_CRON_TITLE','Cron job settings and logs');
define('_JOMRES_COM_A_CRON_DESC','Pseudocron job information. The pseudocron functionality is needed by invoicing and commission handling.');
define('_JOMRES_COM_A_CRON_IMMEDIATERUN','Installed cron minicomponents. To run an individual cron job use the links specified below. Note that the cron jobs do not produce any output so you will not see any information on the page. Instead, refer to the job log below.');
global $jomresConfig_secret;
define('_JOMRES_COM_A_CRON_METHOD','Method');
define('_JOMRES_COM_A_CRON_METHOD_DESC',"If you do not have access to cron jobs, set this to Minicomponent, otherwise create a cron job and tell it to run<br /> <i>curl -s ".JOMRES_SITEPAGE_URL_NOHTML."&task=cronjobs&tmpl=component&no_html=1&secret=".$jomresConfig_secret."> /dev/null</i> ");
define('_JOMRES_COM_A_CRON_LOGGING','Display logging in the browser');
define('_JOMRES_COM_A_CRON_LOGGING_DESC','Only works if the method is set to Minicomponent.');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED','Logging enabled');
define('_JOMRES_COM_A_CRON_LOGGINGENABLED_DESC','Set this to Yes for logging to be enabled. The results of the logs will be output below.');
define('_JOMRES_COM_A_CRON_VERBOSELOGS','Verbose logging');
define('_JOMRES_COM_A_CRON_VERBOSELOGS_DESC','Lots of logging output');
define('_JOMRES_COM_TEMPLATEEDITING_TITLE','Template Editing');
define('_JOMRES_COM_TEMPLATEEDITING_DESC','This functionality allows us to edit Jomres frontend templates on the server, saving the results to the database. Advanced feature, be careful with it.');
define('_JOMRES_COM_TEMPLATEEDITING_TEMPLATENAME','Template Name');
define('_JOMRES_COM_TEMPLATEEDITING_HASBEENCUSTOMISED','Template has been customised?');
define('_JOMRES_COM_CUSTOMFIELDS_TITLE','Custom fields');
define('_JOMRES_COM_CUSTOMFIELDS_DESC','Here you can define simple custom fields that will be shown in the booking form.');
define('_JOMRES_COM_CUSTOMFIELDS_FIELDNAME','Fieldname (no spaces)');
define('_JOMRES_COM_CUSTOMFIELDS_DEFAULTVALUE','Default value');
define('_JOMRES_COM_CUSTOMFIELDS_DESCRIPTION','Description');
define('_JOMRES_COM_CUSTOMFIELDS_REQUIRED','Required');
define('_JOMRES_COM_MR_EXTRA_QUANTITY','Maximum Quantity');
define('_JOMRES_COM_MR_EXTRA_QUANTITY_DESC','If Maximum quantity is set to greater than 1 then guests will be offered a dropdown to choose the quantiy of the extras that they require.');
define('_JRPORTAL_INVOICES_ISSUE',"Issue invoices");
define('_JRPORTAL_TAXRATES_TITLE',"Tax rates");
define('_JRPORTAL_TAXRATES_CODE',"Tax code");
define('_JRPORTAL_TAXRATES_DESCRIPTION',"Rate description");
define('_JRPORTAL_TAXRATES_CANNOTDELETE',"You cannot delete this tax rate.");
define('_JRPORTAL_TAXRATES_RATE',"Rate");
define('_JRPORTAL_INVOICES_TITLE',"Invoices");
define('_JRPORTAL_INVOICES_STATUS_UNPAID',"Unpaid");
define('_JRPORTAL_INVOICES_STATUS_PAID',"Paid");
define('_JRPORTAL_INVOICES_STATUS_CANCELLED',"Cancelled");
define('_JRPORTAL_INVOICES_STATUS_PENDING',"Pending");
define('_JRPORTAL_INVOICES_USER',"User");
define('_JRPORTAL_INVOICES_STATUS',"Status");
define('_JRPORTAL_INVOICES_RAISED',"Raised");
define('_JRPORTAL_INVOICES_DUE',"Due");
define('_JRPORTAL_INVOICES_SUBSCRIPTION',"Subscription");
define('_JRPORTAL_INVOICES_INITTOTAL',"Outstanding total");
define('_JRPORTAL_INVOICES_RECUR_TOTAL',"Recurring total");
define('_JRPORTAL_INVOICES_RECUR_FREQUENCY',"Recurring frequency");
define('_JRPORTAL_INVOICES_RECUR_DOMONTH',"Recurring day of month");
define('_JRPORTAL_INVOICES_CURRENCYCODE',"Currency code");
define('_JRPORTAL_INVOICES_LINEITEMS',"Line items");
define('_JRPORTAL_INVOICES_LINEITEMS_NAME',"Name");
define('_JRPORTAL_INVOICES_LINEITEMS_DESCRIPTION',"Description");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_PRICE',"Initial Price");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_QTY',"Initial Quantity");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_DISCOUNT',"Initial Discount");
define('_JRPORTAL_INVOICES_LINEITEMS_INIT_TOTAL',"Initial Total");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_PRICE',"Recurring Price");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_QTY',"Recurring quantity");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_DISCOUNT',"Recurring discount");
define('_JRPORTAL_INVOICES_LINEITEMS_RECUR_TOTAL',"Recurring total");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_CODE',"Tax code");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_DESCRIPTION',"Tax description");
define('_JRPORTAL_INVOICES_LINEITEMS_TAX_RATE',"Tax rate");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_TITLE',"Paypal settings");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_CURRENCYCODE',"Currency code (eg EUR)");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_USESANDBOX',"Use sandbox?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_PAYPALEMAIL',"Your paypal email address");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_NOTES',"Note: To use paypal you must go to your paypal account & disable Autoreturn. (Profile/Website Payment Preferences), and set IPN (Profile/Instant Payment Notification Preferences)to on URL of:<br/><b>&nbsp;".JOMRES_SITEPAGE_URL_NOHTML."&task=completebk");
define('_JRPORTAL_INVOICES_IMMEDIATEPAYMENT_PLEASEPAY',"This invoice is now due. Please click the button to be taken to paypal.");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE',"Override standard Jomres gateway settings?");
define('_JRPORTAL_INVOICES_PAYPAL_SETTINGS_OVERRIDE_DESC',"If the paypal settings override option is set to Yes then several things happen: General Configuration no longer shows any gateway settings, and two, when a booking is made the settings used here are used so that payment is sent to the address entered here, not that previously configured in General Configuration.");
define('_JRPORTAL_INVOICES_SHOWINVOICES',"Show my invoices");
define('_JRPORTAL_COUPONS_TITLE',"Discount coupons");
define('_JRPORTAL_COUPONS_DESC',"Discount codes can be generated and passed onto guests as an incentive to make bookings. Valid from and to dates refer to the dates that a booking can be made on, not the dates of the booking itself.");
define('_JRPORTAL_COUPONS_CODE',"Coupon code");
define('_JRPORTAL_COUPONS_VALIDFROM',"Valid from");
define('_JRPORTAL_COUPONS_VALIDTO',"Valid to");
define('_JRPORTAL_COUPONS_AMOUNT',"Discount amount");
define('_JRPORTAL_COUPONS_ISPERCENTAGE',"Discount is a percentage");
define('_JRPORTAL_COUPONS_ROOMONLY',"Room only");
define('_JRPORTAL_COUPONS_ROOMONLY_DESC',"Discount is only applied to the cost of the room. If No, then the discount is applied to the entire cost of the booking.");
define('_JRPORTAL_COUPONS_SQLERROR',"Sql error when trying to delete/insert a coupon");
define('_JOMRES_AJAXFORM_COUPON_INSTRUCTIONS','If you have a coupon code, please enter it into the box and click the "Save coupon" link to save the coupon details against your booking.');
define('_JOMRES_AJAXFORM_COUPON_APPLYBUTTON','Save coupon');
define('_JOMRES_AJAXFORM_COUPON_COUPONSAVED','Coupon saved against booking');
define('_JOMRES_AJAXFORM_COUPON_COUPONNOTFOUND','Coupon number not found');
define('_JOMRES_AJAXFORM_COUPON_DISCOUNTVALUE','Coupon discount value');
define('_JOMRES_AJAXFORM_COUPON_BOOKINGNOTE','Booking discounted. Coupon code/discount value/coupon settings : ');
define('_JOMRES_COM_CACHING','Use the Jomres caching feature?');
define('_JOMRES_COM_CACHING_DESC','Set this to No to disable the Jomres caching feature.');
define('_JOMRES_COM_CHOOSELANGUAGES','Choose languages');
define('_JOMRES_COM_CHOOSELANGUAGES_INFO','Choose the language options to be shown in the language switch dropdown.');
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN','Show the language selection dropdown?');
define('_JOMRES_COM_MR_EDITBOOKING_ADMIN_HISTORICBOOKINGS','Booked out and Cancelled bookings');
/*
* @ignore
*/
define('_JRPORTAL_NEWUSER_DEAR',"Dear");
define('_JRPORTAL_NEWUSER_THANKYOU',"Thank you for registering ");
define('_JRPORTAL_NEWUSER_USERNAME',"Your user name is : ");
define('_JRPORTAL_NEWUSER_PASSWORD',"Your password is : ");
define('_JRPORTAL_NEWUSER_LOG_IN',"Please log in to view your bookings ");
define('_JOMRES_MR_AUDIT_UPDATE_COUPON','Coupon saved');
define('_JOMRES_MR_AUDIT_DELETE_COUPON','Coupon deleted');
// Not used yet
define('_JOMRES_COM_GROWL','Use Jomres messaging');
define('_JOMRES_COM_GROWL_DESC','Many manager updates provide feedback in the form of a javascript message when the page is reloaded, use this option to enable/disable that feature.');
define('_JRPORTAL_SMS_CLICKATELL_TITLE',"Jomres -> Clickatell SMS");
define('_JRPORTAL_SMS_CLICKATELL_USERNAME',"Username");
define('_JRPORTAL_SMS_CLICKATELL_PASSWORD',"Password");
define('_JRPORTAL_SMS_CLICKATELL_APIID',"API id");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER',"Notification mobile number");
define('_JRPORTAL_SMS_CLICKATELL_NOTIFICATION_MOBILENUMBER_DESC',"Please use the format 'Country code, mobile number'. For example a UK based mobile number would be something like '447979123456'. Leave this blank if you don't want any notification emails sent to your mobile phone.");
define('_JRPORTAL_SMS_CLICKATELL_TABTITLE',"SMS");
define('_JRPORTAL_SMS_CLICKATELL_INSTRUCTIONS',"
<b>Obviously, you cannot use/test this gateway from localhost, you'll need to do that on a 'live' server.</b>
<br/>
<br/>
In order to use the Clickatell gateway you need a Clickatell account and at least one registered connection (API sub-product instance) between your application and our gateway. Each connection
method is known as a sub-product. Here's how:<br/>
<br/>
<b>Step 1 - register for a Clickatell account</b><br/>
If you do not already have a Clickatell account, you need to register for one as per below. Otherwise proceed to Step 2.<br/>
* Go to http://www.clickatell.com/products/sms_gateway.php, and choose the appropriate API subproduct (connection method) you wish to use ( Clickatell Central (API) )<br/>
* Click on the registration hyperlink.<br/>
* Fill out the registration form.<br/>
After successfully submitting the form you will automatically be logged into your new account and taken to a page where you can add your chosen API connection.<br/>
<b>Step 2 - add a registered API connection (sub-product)</b><br/>
If you are not already logged into your account, then you must do so at http://www.clickatell.com/login.php<br/>
* Select \"Manage my Products\" from the top menu.<br/>
* Select the API connection type you wish to use (HTTP API) from the drop down menu ('Add Connection').<br/>
* Complete the form. Make sure that you enter the locked IP(the IP of this server), set Callback to HTTP POST. You'll need to set the IP callback to ".$jomresConfig_live_site."/index.php?option=com_jomres&task=sms_clickatell_callback and a userid and password.<br/>
If you register more than one API connection, the description name you enter for each must be unique - you cannot have multiple APIs with the same name.<br/>
After successfully submitting the form, your authentication details will be displayed, including each connection's unique API ID (api_id). These authentication details are required when connecting to the Clickatell gateway to send a message.<br/>
<br/>
Use your userid, password and api_id to populate the fields above.<br/>
<br/>
");
define('_JOMRES_COM_A_BOOKINGFORM_SHOWDISABLED','Booking form room list show disabled access');
define('_JOMRES_COM_A_BOOKINGFORM_SHOWMAXPEOPLE','Booking form room list show max people');
define('_JRPORTAL_HORIZROOMSLIST_ESTIMATEWARNING',"Please note that room prices listed are estimates and the full price of the booking will not be calculated until you have added a room or rooms to your selection.");
define('_JOMRES_LASTEDITED_DB','Database template Last edited');
define('_JOMRES_LASTEDITED_DISK','Disk template Last edited');
define('_JOMRES_LASTEDITED_WARNINGICON','Database template warning');
define('_JOMRES_LASTEDITED_WARNINGICON_TEXT','Database template may be out of date');
define('_JOMRES_LASTEDITED_WARNING','If there is an icon against a template, then Jomres has detected that the template stored in the database <strong><i>may</i></strong> be older than that stored on disk, in which case it is possible that the template has been updated in a newer version of Jomres. If this is the case, then it is possible that your template may not be benefiting from a new feature in Jomres, or that existing functionality may no longer work as expected, and you should compare the file on disk to your customisations to ensure that you are not missing out on new features.');
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TITLE',"Subscription packages");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_NAME',"Name");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_DESCRIPTION',"Description");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PUBLISHED',"Published");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY',"Frequency");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD',"Trial period");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALAMOUNT',"Trial amount");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FULLAMOUNT',"Full amount");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_ROOMSLIMIT',"Rooms limit"); // Not currently used, saved for a rainy day
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_PROPERTYLIMIT',"Property limit");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_FREQUENCY_DESC',"Frequency: M/Q/B/A Monthly/Quarterly/Bianually/Anually");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_TRIALPERIOD_DESC',"Trial period: Integer input, 0 (zero) to not set, 1 for one month, 2 for two months etc");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE',"Subscribe");
define('_JRPORTAL_SUBSCRIPTIONS_PACKAGES_SUBSCRIBE_DESC',"Please enter/update your subscriber information. Please note that all fields are required.");
define('_JRPORTAL_SUBSCRIBERS_FIRSTNAME',"First name");
define('_JRPORTAL_SUBSCRIBERS_SURNAME',"Surname");
define('_JRPORTAL_SUBSCRIBERS_ADDRESS',"Address");
define('_JRPORTAL_SUBSCRIBERS_COUNTRY',"Country");
define('_JRPORTAL_SUBSCRIBERS_POSTCODE',"Postcode");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES1',"You need a valid subscription to create new properties. At this moment in time, you have purchased subscriptions for ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES2'," published property(s). ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES3',"You can increase the number of properties you can create by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>purchasing more subscription packages here.</a>");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES4'," You have used ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES5'," property slots. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES6',"To see a list of your current properties click <a href='".JOMRES_SITEPAGE_URL."&task=listyourproperties'>here</a>. ");
define('_JRPORTAL_SUBSCRIBERS_AVAILABLE_PROPERTIES7',"To see a list of the current subscription packages available, click <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages'>here</a>. ");
define('_JRPORTAL_SUBSCRIPTIONS_PUBLISHERROR',"Unfortunately, you cannot publish this property as you have reached your maximum number of available property slots.");
define('_JRPORTAL_SUBSCRIBERS_SUBSCRIBED',"Thank you for creating a subscription to list your property on our server. Once your invoice is marked as paid (there may be a delay depending on Paypal) please <a href='".JOMRES_SITEPAGE_URL."&task=registerProp_step1'>click here to continue creating your property(s).</a>");
define('_JRPORTAL_SUBSCRIBERS_CANCED_SUBSCRIBE',"We are sorry that you have not chosen to subscribe to our service. Please let us know if there's any way we can help you further");
define('_JRPORTAL_SUBSCRIBERS_CANNOT_PUBLISH',"We are sorry, but you've met the limit of the number of properties that you can have published on this system at any one time. You can raise the number of properties that you can publish by <a href='".JOMRES_SITEPAGE_URL."&task=list_subscription_packages&Itemid=".$Itemid."'>purchasing more subscription packages here.</a> ");
define('_JRPORTAL_SUBSCRIPTIONS_USE',"Use subscription handling functionality");
define('_JOMRES_COM_NEWUSER','Create new user on booking');
define('_JOMRES_COM_NEWUSER_DESC','Create new user account on unregistered user booking.');
define('_JOMRES_CLICKTOREGISTER','Click here to register your property');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIPTIONS_TITLE',"Active subscriptions");
define('_JRPORTAL_SUBSCRIPTIONS_GATEWAYSUBSCRIPTIONID',"Gateway subscription id");
define('_JRPORTAL_NEWUSER_SUBJECT',"Thank you for your booking - new user details follow");
define('_JOMRES_LATLONG_DESC',"Use your mouse to move around the map, and drag the pointer to the location of your property to set the latitude and longitude.");
define('_JOMRES_CONTROLPANEL','Control Panel');
define('_JOMRES_COM_FAUXHEADERS','Output Jomres javascript headers into the body of the html?');
define('_JOMRES_COM_FAUXHEADERS_DESC','Set this to Yes if you are having problems with mootools and Jomres\'s jQuery conflicting in IE. This will force Jomres to output the javascript calls within the body of the page instead of the HEAD area, which isn\'t valid html, however it seems to resolve the probems with jquery and mootools conflicting with each other.');
// Jomres v4.2
define('_JOMRES_MANAGER_SHOWINVOICE','Show invoice');
define('_JOMRES_MANAGER_SHOWINVOICES','Show invoices');
define('_JOMRES_USER_LISTMYPROPERTY','Add my property to this site');
define('_JOMRES_WARNINGS_DANGERWILLROBINSON','Warning : ');
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_FREEBIENOTES',"You can have one free package on the system if you wish, by creating a package and setting both the trial amount and the full amount to 0.00");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_NOPACKAGEID',"Sorry, but that package ID is not recognised.");
define('_JRPORTAL_SUBSCRIPTIONS_SUBSCRIBING_ERROR_ALREADYSUBSCRIBEDTOFREEBIE',"Sorry, you are already subscribed to a free package, you cannot subscribe to that package again.");
define('_JRPORTAL_SUBSCRIPTIONS_STATUS_EXPL'," Status <b>0:</b> Pending payment <b>1:</b> Created <b>2:</b> Cancelled <b>3:</b> End of Term");
define('_JRPORTAL_SUBSCRIPTIONS_MYSUBSCRIPTIONS',"My Account");
define('_JOMRES_COM_YOURBUSINESS','Your business details');
define('_JOMRES_COM_YOURBUSINESS_NAME','business name');
define('_JOMRES_COM_YOURBUSINESS_VATNO','VAT number');
define('_JOMRES_COM_YOURBUSINESSADDRESS','Building number');
define('_JOMRES_COM_A_TAX_WARNING2','<font color=red>NOTE: The following tax rates are designed for use by the American market. If you want to use a flat rate tax (eg VAT) for your accommodation, please choose a tax rate from the option above.</FONT>');
define('_JOMRES_INVOICE_NUMBER','Invoice No. ');
define('_JOMRES_FRONT_BLACKBOOKING_DESC_SRP','Select the dates that you want to apply the black booking for. When you have selected the appropriate dates, click the "apply" button to re-check availability. <br/> 
<br/> 
If the property has one or more bookings for the period selected, then you will not be able to book it out until the other bookings/black bookings, have been cancelled/booked out.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANNOTBLACKBOOK','Sorry, you cannot black book this property for those dates.');
define('_JOMRES_FRONT_BLACKBOOKING_SRP_CANBLACKBOOK','You can blackbook this property for those dates.');
define('_JOMRES_WARNINGS_PERPERSONPERNIGHT_NOGUESTTYPES','Your property is configured to charge per person per night but you do not have any guest types created or published, please create and publish one or more guest types. ');
define('_JOMRES_WARNINGS_TARIFFS_NOTARIFFS','You don\'t have any tariffs configured yet, you will not be able take any bookings for your property.');
define('_JOMRES_EDITINGMODE_ON','Editing mode on');
define('_JOMRES_EDITINGMODE_OFF','Editing mode off');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE','Charge variable deposits?');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s arrival date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the arrival day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_NUMBEROFDAYS','The number of days, within which the full amount will be charged as a deposit.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN','Send Contact Owner emails to Alternative address?');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_DESC','Set this option to Yes if you want Contact Owner emails to be sent to the below input. Leave it set to No to send the emails to the email address defined in the property configuration area.');
define('_JOMRES_CONTACTOWNER_TO_ADMIN_ALTERNATIVE','Alternative address for Contact Owner emails.');
define('_JOMRES_CONFIRMATION_EMAIL_SENT','Confirmation email has been sent. You may close this window now.');
define('_JOMRES_REALESTATE_TITLE','Real estate listing');
define('_JOMRES_REALESTATE_YESNO','Is this property a Real estate listing?');
define('_JOMRES_REALESTATE_YESNO_DESC','Select Yes if you are selling the property, select No if it is a hotel/b&b/guest house/villa type property where you will be offering the property or rooms in the property for short term rental and will be using this system for taking bookings.');
define('_JOMRES_FRONT_MR_MENU_CONTACT_AGENT','Contact agent');
define('_JOMRES_INVOICE_MARKASPAID','Mark invoice as paid');
define('_JOMRES_INVOICE_MARKEDASPAID','Invoice marked as paid');
define('_JOMRES_APIKEY_REMAKE','Make new API key');
define('_JOMRES_AUTOTRANSLATE_TITLE','Use Google for initial translations?');
define('_JOMRES_AUTOTRANSLATE_DESC','This feature is new and experimental, so use at your own risk. The purpose of the feature is to query Google\'s translation tool to automatically set up translations for a given property. Note that this feature sanitizes all input, so if you use a html editor for formatting your property details, then this will break that formatting.<br/>');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_TITLE','Is this a single property installation?');
define('_JOMRES_SINGLEPROPERTYINSTALLATION_DESC','If this option is set to Yes, then the frontend view of Jomres to non-authorised users is greatly simplified. Default calls to Jomres from a menu option, instead of being given a list of propertys, just takes the guest to the booking form for the first property in the system. Property managers also will not see see the Property Details preview button or the Add new property button. Ideal if you only want to list one property and take bookings for it.<br/>');
define('_JOMRES_HTMP_PURIFIER','Use HTML purifier functionality?');
define('_JOMRES_HTMP_PURIFIER_DESC','Switch this on to enable Jomres to use the html purifier library (http://htmlpurifier.org/). The library is used as an extra layer of security when dealing with input and output data and it is recommended that you leave it enabled, however it will use more memory.');
define('_JOMRES_AJAXFORM_BILLING_BALANCE_PAYMENT','Balance payment');
define('_JOMRES_AJAXFORM_BILLING_INVOICE_BALANCE','Balance');
define('_JOMRES_WARNINGS_GLOBALEDITINGMODE','Note, you are using Editing Mode with the Global Editing mode enabled. This is fine if you understand what Global Editing mode means, however if you don\'t you may cause yourself problems. If you are unsure if you should be using Jomres in this way, please see <a href="http://manual.jomres.net/developers_guide_customising_editmode.html" target="_blank">the editing mode manual page</a> for more information on this subject.');
define('_JOMRES_SUPPORTKEY','Support key');
define('_JOMRES_SUPPORTKEY_DESC','Your support license key number (also known as your license number). You will need an up-to-date license to be able to download plugins for Jomres.');
define('_JOMRES_PERSONAL_DISCOUNT','Personal discount');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO','Limit property registration to one country?');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_YESNO_DESC','You can ensure that property registrations are limited to just one country by setting this option to Yes and setting the country in the following option.');
define('_JOMRES_ADMIN_REGISTRATION_LIMITPROPERTY_COUNTRY','Properties are located in this country : ');
define('_JOMRES_JQUERYTHEME','Jquery theme');
define('_JOMRES_JQUERYTHEME_DESC','Choose a jquery theme to use for the property details tabs.');
define('_JOMRES_PROPERTYNOTOUBLISHED','We are sorry, but that property is not currently available.');
define('_JOMRES_REVIEWS','Reviews');
define('_JOMRES_REVIEWS_TITLE','Review title');
define('_JOMRES_REVIEWS_DATE','posted on ');
define('_JOMRES_REVIEWS_NOREVIEWS','There are no reviews for this property yet.');
define('_JOMRES_REVIEWS_NOREVIEWS_BETHEFIRST','Would you like to be the first to review this property?');
define('_JOMRES_REVIEWS_IAGREE','I agree with this review');
define('_JOMRES_REVIEWS_IDISAGREE','I disagree with this review');
define('_JOMRES_REVIEWS_AVERAGE_RATING','Average Rating: ');
define('_JOMRES_REVIEWS_TOTAL_VOTES','Total Votes:');
define('_JOMRES_REVIEWS_ADD_REVIEW','Add a new review.');
define('_JOMRES_REVIEWS_ADD_REVIEW_NOTLOGGEDIN','You need to be logged in to post a review.');
define('_JOMRES_REVIEWS_REVIEWBODY','Tell us what you think about this property : ');
define('_JOMRES_REVIEWS_REVIEWBODY_SAID','This reviewer told us : ');
define('_JOMRES_REVIEWS_PROS','Pros: ');
define('_JOMRES_REVIEWS_CONS','Cons: ');
define('_JOMRES_REVIEWS_SUBMITTEDDATE','Submitted On: ');
define('_JOMRES_REVIEWS_ALREADYREVIEWED','You have already reviewed this property, you can\'t post another review about it.');
define('_JOMRES_REVIEWS_CANNOTREVIEW','Sorry, but you are not allowed to post reviews on this site.');
define('_JOMRES_REVIEWS_CLICKTOSHOW','Click to show reviews');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW',' guests agree with this review. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW',' guests do not agree with this review.');
define('_JOMRES_REVIEWS_NUMBER_AGREE_WITHREVIEW_SINGULAR',' guest agrees with this review. ');
define('_JOMRES_REVIEWS_NUMBER_DISAGREE_WITHREVIEW_SINGULAR','guest does not agree with this review.');
define('_JOMRES_REVIEWS_THANKS_FOR_CONFIRM','Thank you for sharing your opinion of this review.');
define('_JOMRES_REVIEWS_ALREADY_CONFIRMED','Thank you, but you have already shared your opinion of this review.');
define('_JOMRES_REVIEWS_COMPLETEALLFIELDS','Please ensure that all fields have been filled.');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_TITLE','Please summarise your review by entering a title');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_DESCRIPTION','Please enter a more complete review in the description box');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_PROS','Please enter the good parts of your experience of being a guest at this property');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_CONS','Please enter any negative thoughts you might have of your experience');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_1','Please rate the hostpitality you received from the staff');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_2','Please rate your opinion of the property\s locale');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_3','Please provide your opinion of the cleanliness of the property');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_4','Please rate the accommodation. Was it comfortable or threadbare');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_5','Please provide your opinion of whether it was value for money');
define('_JOMRES_REVIEWS_ADDREVIEW_ERROR_RATING_6','Please rate the services');
define('_JOMRES_REVIEWS_ADDREVIEW_SUMMARY','Review summary');
define('_JOMRES_REVIEWS_ADDREVIEW_MOREDETAIL','Your experience in more detail');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW','Thank you for submitting your review.');
define('_JOMRES_REVIEWS_THANKS_FOR_REVIEW_MODERATED','Thank you for submitting your review. It will be published soon by one of our hard working moderators.');
define('_JOMRES_REVIEWS_ADMIN_CONTROL','Use Jomres review functionality?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH','Automatically publish reviews?');
define('_JOMRES_REVIEWS_ADMIN_AUTOPUBLISH_DESC','If you set this to No you will need to manually publish reviews');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE','Set reviews to test mode?');
define('_JOMRES_REVIEWS_ADMIN_TESTMODE_DESC','Normally property managers cannot review propertys. With test mode enabled, they can. Naturally this is not ideal in a production environment.');
define('_JOMRES_REVIEWS_ADMIN_PROPERTYLISTINFO','This is a list of all properties. To see a property\'s reviews, click on that property. From there you will be able to publish or delete a review.');
define('_JOMRES_REVIEWS_ADMIN_NUMBERUNPUBLISHED','Number of unpublished reviews');
define('_JOMRES_REVIEWS_ADMIN_NUMBERTOTAL','Total number of reviews');
define('_JOMRES_REVIEWS_ADMIN_PUBLISHREVIEW','Publish/Unpublish review');
define('_JOMRES_REVIEWS_ADMIN_DELETEREVEIEW','Delete review');
define('_JOMRES_REVIEWS_REPORT_REVIEW','Report review');
define('_JOMRES_REVIEWS_REPORT_REVIEW_TITLE','Review reports');
define('_JOMRES_REVIEWS_REPORT_REVIEW_ERROR','Please enter your report');
define('_JOMRES_REVIEWS_REPORT_REVIEW_MOREDETAIL','See something in this review which is objectional or inaccurate? Report it and we will look into it for you.');
define('_JOMRES_REVIEWS_SUBMIT','Submit');
define('_JOMRES_REVIEWS_REPORT_CREATED_BY','Report created by ');
define('_JOMRES_REVIEWS_REPORT_INSTRUCTIONS','Reports are posted by users who may disagree with the content of a review. The only way to remove a report is to delete the review.');
define('_JOMRES_REVIEWS_RATING','Ratings (1 = poor 10 = excellent) ');
define('_JOMRES_REVIEWS_RATING_1','Hospitality  ');
define('_JOMRES_REVIEWS_RATING_2','Location ');
define('_JOMRES_REVIEWS_RATING_3','Cleanliness ');
define('_JOMRES_REVIEWS_RATING_4','Accommodation ');
define('_JOMRES_REVIEWS_RATING_5','Value for money ');
define('_JOMRES_REVIEWS_RATING_6','Services ');
define('_JOMRES_REVIEWS_REVIEWED_BY','Reviewed by : ');
define('_JOMRES_REVIEWS_CLICKTOHIDE','Hide reviews');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS','Show Booking form in property details page?');
define('_JOMRES_COM_A_SHOWBOOKINGFORMINPROPERTYDETAILS_DESC','Set this to Yes to show the booking form in the property details page. If you set it to No, then a link will appear in the property details page instead pointing to the booking form.');
define('_JOMRES_COM_A_TAXINCLUSIVE','Are prices set inclusive of tax?');
define('_JOMRES_COM_A_TAXINCLUSIVE_DESC','Prices set are inclusive? If your prices include tax, then select Yes. If they are not, select No.');
define('_JOMRES_AJAXFORM_BILLING_TAX_EXTRAS','Extras tax:');
define('_JOMRES_MICROMANAGE_PICKER_DAYSOFWEEK','The day of week fields allow you to set a rate for a given day of week, once you click the day of week button all days of the week will be set to that rate.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES','The date pickers and the rate input allow you to set one price for a given date range. Choose a start and end date, input a price, and click the Set Rates button.');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_START','Start range');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_END','End range');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_RATE','Rate');
define('_JOMRES_MICROMANAGE_PICKER_DATERANGES_SET','Set rates');
define('_JOMRES_PARTNERS_TITLE','Partners');
define('_JOMRES_CALENDAR_TODAY','Today');
define('_JOMRES_CALENDAR_PREV','Previous');
define('_JOMRES_CALENDAR_NEXT','Next');
define('_JOMRES_CALENDAR_RTL','false');
define('_JOMRES_ROOMALLOCATIONS_ROOM','Room ');
define('_JOMRES_ROOMALLOCATIONS_GUESTS','guest(s). ');
define('_JOMRES_ROOMALLOCATIONS_INFORMATION','This how we have assigned your guest numbers to their rooms. If you would like to change this allocation, you will need to contact the hotel after making the booking. Extra charges may apply if you change your assignments.');
define('_JOMRES_SANITY_CHECK_NOT_PUBLISHED',"Note that your property is not yet published, only you can see the property, site visitors will not see it");
// 4.5.5
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT','Default search result order');
define('_JOMRES_PROPERTYLIST_FILTERS_DEFAULT_DESC','Change this option to change the order that search results are presented by default.');
define('_JOMRES_PROPERTYLIST_FILTERS_SHOW','Show search result order dropdown');
define('_JOMRES_ROOMMSLIST_STYLE','Rooms list style');
define('_JOMRES_ROOMMSLIST_STYLE_DESC','In the booking form, using the "classic" rooms list style you offer individual rooms to guests. With the room type view, guests choose the number of rooms of type X (eg. 2 x doubles) instead');
define('_JOMRES_ROOMMSLIST_STYLE_CLASSIC','Classic');
define('_JOMRES_ROOMMSLIST_STYLE_ROOMTYPES','Room types');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_START','(Re)checking availability');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_AVAILABLEROOMS','Rebuilding available rooms list');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_CALCTOTALS','Calculating totals');
define('_JOMRES_BOOKINGFORM_PROGRESSMESSAGE_REBUILDING_DONE','Finished form update');
define('_JOMRES_COM_CALENDAR_STARTDAY','Calendar week start day, Sunday or Monday');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY','Only property guests can review?');
define('_JOMRES_REVIEWS_ADMIN_GUESTSONLY_DESC','Set this to Yes if you want to restrict reviews to only those users who have been a guest already in this property.');
define('_JOMRES_CUSTOMTEXT_EXTRAMODEL_PERROOMPERBOOKING','Per room');
define('_JOMRES_MAX_GUESTS_PER_ROOM','Guests per room : ');
define('_JOMRES_MAX_GUESTS_PER_BOOKING','Guests per booking : ');
define('_JOMRES_NUMBER_OF_ROOMS','Number of rooms');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT','Tariff default price');
define('_JOMRES_MICROMANAGE_TARIFFDEFAULT_DESC',"This only applies to new tariffs");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW',"Years to show");
define('_JOMRES_MICROMANAGE_YEARSTOSHOW_DESC',"Defines the number of years to show when editing a micromanage tariff");
define('_JRPORTAL_MONTHS_LONG_0','January');
define('_JRPORTAL_MONTHS_LONG_1','February');
define('_JRPORTAL_MONTHS_LONG_2','March');
define('_JRPORTAL_MONTHS_LONG_3','April');
define('_JRPORTAL_MONTHS_LONG_4','May');
define('_JRPORTAL_MONTHS_LONG_5','June');
define('_JRPORTAL_MONTHS_LONG_6','July');
define('_JRPORTAL_MONTHS_LONG_7','August');
define('_JRPORTAL_MONTHS_LONG_8','September');
define('_JRPORTAL_MONTHS_LONG_9','October');
define('_JRPORTAL_MONTHS_LONG_10','November');
define('_JRPORTAL_MONTHS_LONG_11','December');

define('_JOMRES_PROPERTYMANAGEMENTPROCESS',"Property management process");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_DESC',"There are different management processes depending on the way you want to list your property/business.");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL',"Rental");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_RENTAL_DESC',"Choose the rental option if you are booking out rooms in a property (eg. Hotel/B&B/Villa/Apartment)");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE',"Realestate/simple listing");
define('_JOMRES_PROPERTYMANAGEMENTPROCESS_REALESTATE_DESC',"Choose the real estate option if you are not offering any booking functionality at all, (eg. A property/item for sale)");

define('JOMRES_COM_A_MINIMALCONFIG_DESC','Set this to Yes to reduce the number of options available to property managers in the General Configuration section. This is useful if you do not want property managers to play around with too many settings, instead you can edit jomres_config.php to define default property options.');

define('_JOMRES_AJAXFORM_EXTRAS_SELECT','Please select an option for your booking');
define('_JOMRES_COM_ALLOWHTMLEDITOR_DESC','Switches on html editors in property details editing page. Additionally, if this is set to No, then all html except p and br is stripped from all entered and displayed text.');
define('_JOMRES_COM_MANAGEMENTVIEW_MANAGMENT',"Fullscreen view");
define('_JOMRES_COM_MANAGEMENTVIEW_SITEPREVIEW',"Normal view");
define('_JOMRES_COM_TIMEZONE_SWITCHER',"Show the timezone switcher in the property manager's toolbar?");

define('_JOMRES_PARTNER_DISCOUNT',"Partner discount ");
define('_JOMRES_PARTNER_CHOOSE_SEARCHTITLE',"Search user");
define('_JOMRES_PARTNER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters to search for a user.<br/> When you select a user you will automatically add them as a Partner and you will be taken to the next page where you can assign properties and discounts to the user.");
define('_JOMRES_PARTNER_CHOOSE_EXISTINGTITLE',"Existing partners");
define('_JOMRES_PARTNER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a partner to be taken to the partner administration page.");

define('_JOMRES_PARTNER_SHOW_TITLE',"Partner :");
define('_JOMRES_PARTNER_SHOW_SEARCHTITLE',"Search for a property");
define('_JOMRES_PARTNER_SHOW_SEARCHINSTRUCTIONS',"Enter a few characters from the property name and select a property.<br/> When you select the property you will add it to the partner's portfolio, however they will not yet enjoy any discounts, you will need to set those youself.");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES',"Current properties");
define('_JOMRES_PARTNER_SHOW_CURRENTPROPERTIES_INSTRUCTIONS',"Click on a property to edit the partner's discount settings for that property.");


// 4.6
define('_JOMRES_SUSPENSIONS_TITLE',"Suspended? <br/>(click to suspend a manager, this will auto-unpublish all of their properties ) ");
define('_JOMRES_SUSPENSIONS_MANAGERLIST_INFO',"Click on the Suspend Icon (the icon with the man and the green tick) to suspend a manager. This means that the manager will not be able to perform property management functions and all of their properties will be unpublished. Super property managers cannot be suspended.");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED',"This account has been suspended, it is not currently possible to administer your propert(ies) using this account.");
define('_JOMRES_SUSPENSIONS_SUSPENDED_EMAIL_TITLE',"Manager account suspended");
define('_JOMRES_SUSPENSIONS_UNSUSPENDED_EMAIL_TITLE',"Manager account reinstated");
define('_JOMRES_SUSPENSIONS_MANAGER_SUSPENDED_EMAIL',"Please note that your property manager account has been suspended. You will not be able to perform any property management functions until the account has been restored.");
define('_JOMRES_SUSPENSIONS_MANAGER_UNSUSPENDED_EMAIL',"Please note that your property manager account is now active. You may continue to perform any property management functions. Please log into your account and ensure that the approprite propert(ies) have been published. Thank you.");
define('_JOMCOMP_MYUSER_REMOVE','Remove favourite');
define('_JOMRES_DATA_ARCHIVE_TITLE','Booking data archive');
define('_JOMRES_DATA_ARCHIVE_TITLE_DESC','The booking data archive is a raw dump of booking information captured after the confirm booking button is clicked. Hover over a date to see the raw data dump. The information is stored in the XXX__jomres_booking_data_archive table.');
define('_JOMRES_MY_ACCOUNT_EDIT','Edit account');
define('_JOMRES_MANAGER_CHOOSE_SEARCHTITLE',"Search users");
define('_JOMRES_MANAGER_CHOOSE_SEARCH_INSTRUCTIONS',"Enter a few characters from their username to search for a user.<br/> When you select a user you will automatically add them as a Manager and you will be taken to the next page where you can assign properties and access rights to the user.");
define('_JOMRES_MANAGER_CHOOSE_EXISTINGTITLE',"Existing managers");
define('_JOMRES_MANAGER_CHOOSE_EXISTING_INSTRUCTIONS',"Choose a manager to be taken to the manager administration page.");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER',"Search by guest numbers");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYGUESTNUMBER_DESC',"Show the search by guest number dropdown");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYTARS',"Search by stars");
define('_JOMRES_COM_A_INTEGRATEDSEARCH_BYSTARS_DESC',"Show the search by stars dropdown");
define('_JOMRES_SEARCH_GUESTNUMBER','Number of guests');
define('_JOMRES_SEARCH_STARS','Number of stars');

define('_JRPORTAL_INVOICES_COMMISSION_TITLE',"Commission invoices");
define('_JOMRES_CHOOSEMANAGER_NUMBEROFPROPERTIES_ASSIGNED',"Number of properties");

// 4.6.1
define('_JOMRES_CONFIG_JQUERY',"Load Jomres jQuery library?");
define('_JOMRES_CONFIG_JQUERY_DESC',"You can set this to NO if you have a template that uses jquery. This MAY resolve jquery conflict issues on some templates, but not all.");
define('_JOMRES_COM_CHOOSELANGUAGES_SHOWDROPDOWN_DESC','If you use Joomfish, you should set this to No, and use Joomfish\'s language switcher. The switcher is always enabled in the administrator area because it is needed when you use the Label Translations feature.');
define('_JOMRES_COM_A_UPLOADS_IMAGES_WIDTH_LARGE_DESC','Thumbnails are created automatically for uploaded images.');

// 4.7.1
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH','Small thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_SMALL_WIDTH_DESC','Small thumbnails are used in the property list whereas medium sized thumbnails are used in the property header.');
define('_JOMRES_COM_THUMBNAIL_SMALL_HEIGHT','Small thumbnails max height (px).');
define('_JOMRES_COM_THUMBNAIL_MED_WIDTH','Medium thumbnails max width (px).');
define('_JOMRES_COM_THUMBNAIL_MED_HEIGHT','Medium thumbnails max height (px).');
define('_JOMRES_TOUCHTEMPLATES','Label Translations');

define('_JRPORTAL_ROI_TAB',"ROI");
define('_JRPORTAL_INVOICES_COMMISSION_USE',"Use commission functionality?");
define('_JRPORTAL_INVOICES_COMMISSION_USE_DESC',"Set this to Yes to show the manager commission invoices which have been raised.");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS',"Manager bookings create commission invoices?");
define('_JRPORTAL_INVOICES_COMMISSION_MANAGER_TRIGGERS_DESC',"If a manager makes a booking, does that also create a commission invoice line item?");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_SUBJECT',"A new commission invoice has been raised");
define('_JRPORTAL_INVOICES_COMMISSION_INVOICE_RAISED_EMAIL_MESSAGE',"A new commission invoice has been raised which requires your attention. Please click on the following link to view the invoice (you may need to log in first).");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND',"Auto suspend managers where invoices are marked as Pending?");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD',"Auto suspend threashold");
define('_JRPORTAL_INVOICES_COMMISSION_AUTOSUSPEND_THREASHOLD_DESC',"This threashold is the number of days that a manager has to pay an invoice before they are suspended and their properties unpublished.");

//4.7.2
define('_JOMRES_COM_LANGUAGE_CONTEXT','Language context');
define('_JOMRES_COM_LANGUAGE_CONTEXT_DESC','Use this option to change the site\'s language context. This feature allows Jomres to use labels that are appropriate for your current focus, so if your focus is as a Yacht Brokerage, then changing the context will allow Jomres to present labels from a different language file. For example, if you set the context to "Yacht Brokerage" then Jomres will first find the current language, then search the /jomres/languages directory for a sub-directory called "yachtbrokerage". If the file exists for the current language then that file will be used. If not, then Jomres will search for an english language file in that same directory. If that can\'t be found, Jomres will use the language file for the currently selected language in the /jomres/languages directory.');

// 4.7.3
define('_JOMRES_COM_ADVANCED_SITE_CONFIG','Advanced site config');
define('_JOMRES_COM_ADVANCED_SITE_CONFIG_DESC','Set this option to Yes if you want to use the advanced site configuration options. If you\'re just starting with Jomres, then we advise you to leave this to No for now, as the default installation is sufficient to get you started, instead you should add Jomres to the main menu and log into the frontend as "admin" and start configuring your property(s). Please note that many of the advanced options will only be applicable to installations of Jomres Silver, Jomres Lite users will not be able to take full advantage of the features that they enable.');

define('_JOMRES_CONFIG_JQUERY_UI',"Load Jomres jQuery UI library?");

define('_JOMRES_SORTORDER_PRICE_DESC','Price (highest first)');
define('_JOMRES_SORTORDER_PRICE_ASC','Price (lowest first)');

// 4.7.6

define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT','Price summary and estimates should be priced as per night/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY','Per night');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WEEKLY','Per week');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_MONTHLY','Per month');
define('_JOMRES_BOOKINGFORM_PERPERSON','Per person');

define('_JOMRES_AJAXFORM_ACCOMMODATION_WEEKS','week(s) at ');
define('_JOMRES_AJAXFORM_ACCOMMODATION_MONTHS','month(s) at ');

// 4.7.7

define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS','How should the search option for people numbers work?');
define('_JOMRES_A_GLOBAL_SEARCHOPTION_PEOPLENUMBERS_DESC','Affects all search modules. When using the guest number search feature, should the search feature look for properties who\'s tariffs will support guest numbers up and equal the number chosen, exactly equal the number chosen, or the number chosen and greater? ');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE','Please wait, your order is being processed and you will be redirected to the Paypal website.');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_IFNOTREDIRECTED','If you are not automatically redirected to Paypal within 5 seconds...');
define('_JOMRES_PAYPAL_REDIRECTMESSAGE_CLICKHERE','Click Here');
// 4.7.8

define('_JRPORTAL_COUPONS_BOOKING_VALIDFROM',"Booking valid from");
define('_JRPORTAL_COUPONS_BOOKING_VALIDTO',"Booking valid to");
define('_JRPORTAL_COUPONS_GUESTNAME',"Guest name");
define('_JRPORTAL_COUPONS_DESC_478',"Discount codes can be generated and passed onto guests as an incentive to make bookings.<br/>
Valid from and to dates refer to the dates that a booking can be made on, whereas the Booking valid from/to dates refer to the dates that the booking must cover for the coupon to be valid. If a booking falls outside of that period then normal rates will apply to the days outside of that period.<br/>
If you want the booking to be available to one specific guest, choose that guest's name in the dropdown to limit the coupon to that guest only.");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK',"With your coupon, this booking has been discounted from ");
define('_JRPORTAL_COUPONS_BOOKING_DISCOUNT_FEEDBACK_TO'," to ");

define('_JOMRES_CONFIG_JQUERY_UI_DESC',"Set this to No to disable loading of both the Jquery UI javascript and CSS files.");
define('_JOMRES_CONFIG_JQUERY_UI_CSS',"Load Jomres jQuery UI CSS library?");
define('_JOMRES_CONFIG_JQUERY_UI_CSS_DESC',"Set this to No to disable only the jquery UI CSS file.");

//v5.1 
define('_JOMRES_LINEITEM_TOTAL_INCLUDINGTAX',"Total inc tax");
define('_JOMRES_MR_AUDIT_UNPUBLISH_PROPERTY','Unpublished property');

// v5.2
define('_JOMRES_CONVERSION_TITLE',"Use conversion functionaity");
define('_JOMRES_CONVERSION_TITLE_DESC',"Use the Jomres online conversion functionality. This will offer a conversion dropdown to frontend users, where they will be able to choose a currency that they wish to see prices offered in. Price output is adjusted to show the converted price followed by the property's 'native' price in brackets.");
define('_JOMRES_CONVERSION_DISCLAIMER',"We have used our best efforts to obtain the most accurate and timely exchange rates that we can. Our online currency convertion feature is a service provided for informational purposes only and is not intended to provide exact figures. Accordingly, we do not guarantee the accuracy of the exchange rates. Using this feature, you are deemed to have agreed that any reliance on or use of the rate conversion feature shall be entirely at your own risk.");
define('_JOMRES_JAVASCRIPT_CACHING_TITLE',"Use javascript caching?");
define('_JOMRES_JAVASCRIPT_CACHING_DESC',"Choose whether or not to use the Jomres Javascript caching feature. Works on most servers, but not on all. If you're having problems with javascript errors that are reported as 'unterminated string literal' in (for example) Firebug, you should set this to No. ");

// 5.2.1
define('_JOMRES_HISTORIC_GUESTS_SHOW',"List historic and current guests");
define('_JOMRES_HISTORIC_GUESTS_NOSHOW',"Current guests only");

// 5.3.1
define('_JOMRES_CURRENCYCONVERSION_TAB','Currency conversion/currency codes');
define('_JOMRES_IP_DETECTION_API_KEY_TITLE','IP Detection API Key');
define('_JOMRES_IP_DETECTION_API_KEY_DESC','To automatically set the currency code dropdown Jomres is able to use a free service called IPinfoDB to detect the visitor\'s country, however you need to register for an API key at <a href="http://ipinfodb.com/register.php" target="_blank">IPinfoDB</a> first.');
define('_JOMRES_DEBUGGING_TAB','Debugging');
define('_JOMRES_BOOKINGORM_MODALPOPUP','Show the booking form in a modal popup?');
define('_JOMRES_BOOKINGORM_MODALPOPUP_DESC','If the option to show the booking form in the property details is set to No, then when the booking form page is opened Jomres can show the booking form in a modal popup. This allows you to include much more information in the booking form without overwhelming the customer by having too many elements on the screen (as they\'re hidden behind the popup)');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION','Totals panel location');
define('_JOMRES_BOOKINGORM_TOTALSPANEL_LOCATION_DESC','In the booking form the totals panel needs different settings depending on the template. For example, on the Jomres Joomla template a setting of 712 works well, however on Milkyway a setting of circa 1500 is more suitablem, particularly if you do not have the modal popup feature enabled. It\'s likely that you\'ll need to experiment with different settings to find something that works well in your chosen template. ');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_EX_TAX','Accomodation ex tax');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_INC_TAX','Accomodation inc tax');
define('_JOMRES_AJAXFORM_BILLING_TAX_ACCOM','Rooms tax:');
define('_JOMRES_AJAXFORM_BUTTON_OPEN_BOOKINGFORM','Open the booking form');

define('_JOMRES_AJAXFORM_BUTTON_BACK_TO_PROPERTY_DETAILS','Back to property details');
define('_JOMRES_COM_MR_EXTRA_AUTO_SELECT','Automatically Selected?');
define('_JOMRES_BOOKINGORM_ROOMTOTAL_BALANCE','Balance (after deposit paid)');

define('_JOMRES_BOOKINGORM_ROOMFEATURE_FILTER','Filter resources based on their features.');

define('_JOMRES_DATEPERIOD_LATESTBOOKING','Latest booking');
define('_JOMRES_DATEPERIOD_SECOND','second');
define('_JOMRES_DATEPERIOD_MINUTE','minute');
define('_JOMRES_DATEPERIOD_HOUR','hour');
define('_JOMRES_DATEPERIOD_DAY','day');
define('_JOMRES_DATEPERIOD_WEEK','week');
define('_JOMRES_DATEPERIOD_MONTH','month');
define('_JOMRES_DATEPERIOD_YEAR','year');
define('_JOMRES_DATEPERIOD_DECADE','decade');
define('_JOMRES_DATEPERIOD_S','s');
define('_JOMRES_DATEPERIOD_AGO','ago');
define('_JOMRES_DATEPERIOD_FROMNOW','from now');

define('_JOMRES_WHOLEDAY_TITLE','Bookings are for whole days?');
define('_JOMRES_WHOLEDAY_DESC','By default the system bookings resources out by the night, so a booking from the first of January '.date("Y",strtotime("next year")).' to the 2nd of January '.date("Y",strtotime("next year")).' covers just one night. If you set this option to Yes, however, then the booking will cover entire days instead, so a booking on those days would cover both days and the customer would be billed for two days.');
define('_JOMRES_FRONT_TARIFFS_PN_DAY_WHOLEDAY','Per day');
define('_JOMRES_FRONT_TARIFFS_PPPN_DAY_WHOLEDAY','Per person per day');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVAL_WHOLEDAY','Pickup');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTURE_WHOLEDAY','Return');
define('_JOMRES_AJAXFORM_ACCOMMODATION_NIGHTS_WHOLEDAY',"days(s) at");
define('_JOMRES_BOOKINGFORM_MONITORING_DEPARTUREDATE_INVALID_WHOLEDAY','Return date incorrect');
define('_JOMRES_BOOKINGFORM_MONITORING_BOOKING_TOO_SHORT1_WHOLEDAY','The booking is too short. There needs to be at least this many days between the pickup and return dates:');
define('_JOMRES_COM_A_MINIMUMINTERVAL_WHOLEDAY','Pickup/Return minimum interval');
define('_JOMRES_COM_A_MINIMUMINTERVAL_DESC_WHOLEDAY','The mimimum interval in the booking form between the pickup and the drop off dates. An interval of 1 means that the pickup and return dates can be set to the same day, however this is still dependant on the minimum interval that\'s automatically calculated by the booking engine, as it checks tariffs that are valid for the booking period.');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_WHOLEDAY','Price summary and estimates should be priced as per day/per week/per month?');
define('_JOMRES_BOOKINGFORM_PRICINGOUTPUT_DAILY_WHOLEDAY','Per day');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_WHOLEDAY','Days before the pickup date');
define('_JOMRES_COM_A_DAYSBEFOREFIRSTBOOKING_DESC_WHOLEDAY','The minimum number of days that must elapse, from "today", before the pickup date.');
define('_JOMRES_COM_A_ADVANCEBOOKINGSLIMITYESNO_DESC_WHOLEDAY','Set this to yes if you want to limit advance bookings (use the next field to set the limit in terms of days). If you do set this to yes then if the user tries to book more than n days in advance then their pickup date will be restored to today\'s date');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_WHOLEDAY','Show return date input?');
define('_JOMRES_COM_A_SHOWDEPARTUREINPUT_DESC_WHOLEDAY',"Set this to No if you don't want to show the return date input box. Only use this if you know what you're doing, as the return date in bookings will always be set to the day after the pickup date.");

define('_JOMRES_COM_A_FIXEDPERIODBOOKINGS_DESC_WHOLEDAY','If you set this to Yes, then bookings will be taken for a fixed period. If this is set to No, then ensure that "defined pickup day" isn\'t set to Yes (unless you specifically want to force people to pickup on a certain day of the week) otherwise you will not get many links in the availability calendar.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_WHOLEDAY','Pre-defined pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_YESNO_DESC_WHOLEDAY','Only for sites offering fixed period bookings. Choose the day of the week that pickups must be made on.');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_DAY_WHOLEDAY','Fixed pickup day');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_WHOLEDAY','Fixed pickup dates recurr: ');
define('_JOMRES_COM_MR_FIXEDARRIVALDATE_RECURRING_DESC_WHOLEDAY','When fixed pickup dates are selected, the number of dates that can be shown in the dates dropdown list. Note that the list of dates will not include any dates if a booking is not possible due to prior bookings, and that the list will actually be twice as long as your selected number because it will have a similar number of historic dates (where available).');
define('_JOMRES_COM_A_TARIFFS_PER_WHOLEDAY','Per person, per day');
define('_JOMRES_COM_A_TARIFFS_PER_DESC_WHOLEDAY','Select Yes if you want to charge per-person-per-day. If no, then costs will be calculated on a per-resource-per-day basis');
define('_JOMRES_COM_A_DEPOSIT_CHARGEDEPOSIT_VARIABLE_DESC_WHOLEDAY','Variable deposits allow you to define if you\'d like to charge the full amount if the booking\'s pickup date is within N days from "today". Set this option to Yes to enable the feature, and enter the number of days below, so for example if the pickup day is within 60 days, then the deposit amount charged will be the full amount, otherwise the amount will be based on the deposit options configured above.');
define('_JOMCOMP_WISEPRICE_TITLE_DESC_FULL_WHOLEDAY','Most businesses will recalculate resource prices based on the number of resources of a required type that are available on a given date. This allows them to offer discounts on a resource/business type that isn\'t busy during a given period with the aim of attracting business that might otherwise be missed.<br/>Enabling and configuring this plugin allows you to offer adjustable pricing based on the number of resources of a selected type are available in the business on a given day.<br/> The days threshold defines the number of days that the pickup date must be within before resource prices are adjusted by this feature, then the percentages options allow you to configure the percentage of resources that can be available before a given discount is applied. Note however, if multiple resources are booked then the current level of discount will be applied to all resources and will not reduce as more resources are selected.');
define('_JOMCOMP_WISEPRICE_THREASHOLD_WHOLEDAY','Threshold (number of days between pickup date and today)');
define('_JOMRES_COM_MR_VIEWBOOKINGS_PENDING_WHOLEDAY','Pickup Pending');
define('_JOMRES_COM_MR_VIEWBOOKINGS_ARRIVETODAY_WHOLEDAY','Pickup today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_RESIDENT_WHOLEDAY','Picked up');
define('_JOMRES_COM_MR_VIEWBOOKINGS_DEPARTTODAY_WHOLEDAY','Returns today');
define('_JOMRES_COM_MR_VIEWBOOKINGS_STILLHERE_WHOLEDAY','Return overdue');
define('_JOMRES_COM_MR_VIEWBOOKINGS_LATE_WHOLEDAY','Has not picked up');
define('_JOMRES_COM_MR_QUICKRES_STEP4_STAYDAYS_WHOLEDAY','Days');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTIN_WHOLEDAY','Mark a booking picked up.');
define('_JOMRES_FRONT_MR_MENU_ADMIN_BOOKAGUESTOUT_WHOLEDAY','Mark a booking returned.');
define('_JOMRES_FRONT_MR_BOOKIN_TITLE_WHOLEDAY','Mark a booking picked up');
define('_JOMRES_FRONT_MR_BOOKOUT_TITLE_WHOLEDAY','Mark a booking returned');
define('_JOMRES_COM_INVOICE_COSTPERNIGHT_WHOLEDAY','Cost per day: ');
define('_JOMRES_COM_INVOICE_STAYNIGHTS_WHOLEDAY','Number of days: ');

define('_JOMCOMP_AMEND_OVERRIDE_ACCOMMODATION_TOTAL','Override Accommodation Total');
define('_JOMCOMP_AMEND_OVERRIDE_SAVE','Save override');

define('_JOMRES_BOOKINGFORMWIDTH','Booking form width in px');
define('_JOMRES_BOOKINGORM_SLIDERENABLED','Allow the totals panel to slide down the booking form?');
define('_JOMRES_BOOKINGORM_SLIDERENABLED_DESC','The totals panel will slide down the booking form as the user scrolls down. You can enable/disable this feature with this switch. Note, if the user visits via a mobile device\'s browser then sliding is automatically disabled.');
define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS','Email new users their login details?');
define('_JOMRES_BOOKINGORM_EMAIL_NEWUSER_EMAIL_LOGIN_DETAILS_DESC','If the Create New User option is set to Yes, you can set this option to No to ensure that they are not emailed their login details once the user has been created. This might be useful if you are automatically adding new users to a mailing list, for example, and do not want users to actually log in.');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT','Show tax output in the booking form totals summary?');
define('_JOMRES_BOOKINGORM_TAX_OUTPUT_DESC','Prevent the booking form from showing the tax price fields in the totals summary by setting this option to No.');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD','Cancellation Threashold');
define('_JOMRES_COM_A_ODDS_CANCELLATION_THREASHOLD_DESC','Logged in, registered guests can cancel their own bookings. Here you can set the threashold, in days, where the booking cannot be cancelled after a certain number of days before the arrival date.');

define('_JOMRES_EDIT_PROFILE','Edit Profile');
define('_JOMRES_PROPERTY_TYPE_ASSIGNMENT','Property type relationship');
define('_JOMRES_IMAGE','Image');
define('_JOMRES_FEATURE_PROPERTY_TYPE_ASSIGNMENT','Business types that can show this feature');
define('_JOMRES_CRATES_CLICKINITIAL','Click on a letter to show all businesses with that first character. Once you have a list of properties you can assign commission rates to those properties, or click on their "edit" icon to view the business\'s statistics.');
define('_JRPORTAL_TAX_RATE_EDIT',"Edit Tax rate");

define('_JOMRES_COM_CUSTOMFIELDS_TITLE_EDIT',"Edit Custom field");

define('_JOMRES_LICENSESERVER_PASSWORD',"License server password");
define('_JOMRES_LICENSESERVER_USERNAME',"License server username");
define('_JOMRES_LICENSESERVER_USERNAME_DESC',"If you have a username and password on the license server, please enter them here. This will help you to access plugins that you are entitled to. If you have entered a valid Support key in the field above, then it is not necessary to supply the username/password here.");

define('_JOMRES_VERSIONCHECK_THISJOMRESVERSION',"This Jomres version : ");
define('_JOMRES_VERSIONCHECK_LATESTJOMRESVERSION',"Latest Jomres version");
define('_JOMRES_VERSIONCHECK_VERSIONWARNING',"Alert : There is a new version of Jomres available, you are advised to upgrade at your earliest convenience.");

define('_JOMRES_PRODUCT_INFORMATION','Welcome to Jomres, we hope you enjoy using Joomla\'s favourite booking system. If you would like to purchase a Jomres Silver or Jomres Gold license, <a href="http://www.jomres.net/prices" target="_blank"> please visit our site</a> for information on how you can upgrade.');
define('_JOMRES_PRODUCT_INFORMATION2','This system is ideal for any scenario, be it a simple booking form for a single property, right up to a site that has multiple users, in multiple languages, with multiple properties. Please see the "Help" section to the left, including the "Getting Started" page which will guide you through your first steps.');

define('_JOMRES_ROBBED_PORTALUI_CURRENT_PROPERTY',"Active property");
define('_JOMRES_ROBBED_PORTALUI_SWITCH_PROPERTY',"Change your active property");
define('_JOMRES_ROBBED_PORTALUI_CLICKINITIAL',"Click a character to reveal all properties that start with that character. Once revealed, click on that property's name to change it to your active property.");

define('_JOMRES_CONFIG_ALTERNATE_SMTP_TITLE',"Alternate SMTP Settings");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_DESC',"Set this option to Yes to use these Alternate SMTP settings. An increasing number of web hosts appear to be blocking PHP mail functionality, so you can choose to over-ride the mail settings that Jomres adopts from your host CMS (typically Joomla) and use settings of your own choice here.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST',"Alternate Host");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_HOST_DESC',"Change this to your smtp mail server");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT',"Alternate Port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PORT_DESC',"Change this to your smtp port");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL',"Alternate Protocol");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PROTOCOL_DESC',"Depending on your smtp server settings, you need to leave this blank, or enter 'ssl' or 'tls'. Ask your SMTP provider if you don`t know.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH',"Use authentication");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_AUTH_DESC',"If your SMTP server requires clients to login, set this to Yes. The Username and Password will then be used.");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME',"Alternate Username");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_USERNAME_DESC',"");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD',"Alternate Password");
define('_JOMRES_CONFIG_ALTERNATE_SMTP_PASSWORD_DESC',"");

define('_JOMRES_WARNING_SYSTEM_CACHE',"Warning : We have detected that your Joomla System Cache plugin is enabled. We advise you to disable this plugin as it will cache the ajax responses to the booking form, causing your system to behave erratically.");

define('_JOMRES_QUICK_INFO',"Quick Info");

define('_JOMRES_MENU_SHOW',"Show");
define('_JOMRES_MENU_HIDE',"Hide");
define('_JOMRES_MENU_SHOW_TITLE',"Use the alternate menu layout?");
define('_JOMRES_MENU_SHOW_DESC',"Set this to Yes to use the Alternate menu option in the frontend. When set to No the Jomres Main Menu shows as an accordion on the left of the page, with a button to enlarge the menu. When set to Yes, the Alternate Main Menu is used, which results in a menubar across the top of the page. Both menus will slide with the user, and the Accordion menu is considered to be the better menu, however if you find that it's not appropriate for you, you're free to choose the alternate. If neither of these menus suit you, then you will need to modify mainmenu_wrapper.html and mainmenu_options.html to suit your specific set of requirements.");


define('_JOMRES_ACCESS_CONTROL_LEVELS_DEFAULT',"Default");
define('_JOMRES_ACCESS_CONTROL_LEVELS_ANYBODY',"Anybody");
define('_JOMRES_ACCESS_CONTROL_LEVELS_REGISTERED',"Registered");
define('_JOMRES_ACCESS_CONTROL_LEVELS_MANAGER',"Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_SUPERMANAGER',"Super Manager");
define('_JOMRES_ACCESS_CONTROL_LEVELS_NOBODY',"Nobody");

define('_JOMRES_ACCESS_CONTROL_TITLE',"Menu Access control");
define('_JOMRES_ACCESS_CONTROL_DESC',"This feature allows you to control who will be able to see a plugin in the main menu. Typically user options 00009 are viewable by either/or unregistered site visitors, 00010 options generally refer to Reception type activites that are used on a day to day basis, whereas 00011 options are used for setting up and configuring a property but are accessed less often.");

define('_JOMRES_ACCESS_CONTROL_LEVELS_RECEPTIONIST',"Receptionist");
define('_JOMRES_ACCESS_CONTROL_CONFIG_TITLE',"Full Access Control");
define('_JOMRES_ACCESS_CONTROL_CONFIG_DESC',"Set this option to Yes to enable the full access control feature, then visit the Access Control option under System Maintenance to configure access controls.");

define('_JOMRES_ACCESS_CONTROL_DESC_ADDENDUM',"Note, however, this these settings do not control the underlying scripts that they connect to, so for example if you set <i>00009user_option_03_search</i> to 'Manager' a user who knows Jomres can still call j06000search.class.php by entering http://www.domain.com/index.php?option=com_jomres&task=search in their browser's address bar. This is intentional, as this Menu Access control simply controls what can be seen in the Jomres Main Menu. If you need tighter controls then set the Site Config -> Full Access Control option to Yes and revisit the Menu Access Control option.");
define('_JOMRES_ACCESS_CONTROL_TITLE_FULL',"Full Access control");
define('_JOMRES_ACCESS_CONTROL_DESC_FULL',"<strong>This feature is for advanced users only. If you do not know what it is for, and don't have a specific reason to use it, please return to Site Configuration and set the Full Access Control option to No.</strong><br/>
	This feature allows you to control who can access which minicomponents (with some exceptions that are hard coded into the system). If the access level next to a script's name is set to Default, then with the Full Access Control option set to Yes <strong>anybody</strong> can access scripts that they should not be able to access therefore if you intend to use this feature you MUST set the access control level for <strong>every</strong> Jomres minicomponent listed here. If you do not know what these minicomponents do, then we strongly advise you to not use this feature at all.<br/>
	In Jomres access levels follow a pyramid, so Super Property Managers are greater than Managers. In short Super Manager > Manager > Receptionist > Registered > Unregistered. So, if a Registered user has access to a minicomponent, so do Receptionists,  Managers and Super Managers.<br/>
	Note that you cannot control administrator area minicomponents. Anybody in the administrator area is considered to be a trusted user in that they should not be blocked from accessing any script (especially this one).
	");
define('_JOMRES_ACCESS_CONTROL_SANITYCHECK_WARNING',"Warning! You have full access control enabled, however we have counted the access control settings and compared them to the number of minicomponents that should be controlled, and the two do not match up, therefore you may have some scripts that are not controlled. This could be a security issue and you are urged to resolve this at once by visiting the Access Control feature and checking that the appropriate levels have been applied.");

define('_JOMRES_SHOWPROFILES_USERSWITHACCESS',"Users with admin rights to this property");
define('_JOMRES_ADMIN_LISTALLUSERSINVOICES',"List all user's invoices");


define('_JOMRES_DEBUGGING_SUBJECT','Subject');
define('_JOMRES_DEBUGGING_FULLNAME','Your full name');
define('_JOMRES_DEBUGGING_YOUREMAIL','Your email address');
define('_JOMRES_DEBUGGING_ISSUE','Please describe your issue');
define('_JOMRES_EXTRAS_MODELS_MODEL','Model');
define('_JOMRES_EXTRAS_MODELS_PARAMS','Parameters');
define('_JOMRES_EXTRAS_MODELS_FORCE','Force');
define('_JOMRES_METATITLE','Meta title');
define('_JOMRES_METADESCRIPTION','Meta description');
define('_JOMRES_FOUNDPROPERTIES',"Properties found");
define('_JOMRES_REGISTRATION_STEP_1_OF_2',"Add your property : Step 1 of 2");
define('_JOMRES_REGISTRATION_STEP_2_OF_2',"Add your property : Step 2 of 2");

define('_JOMRES_MYPROPERTIES','My businesses');


define('_JOMRES_CART_TITLE','My proposed bookings');
define('_JOMRES_CART_INFO','Note, these bookings have not been saved yet. If you log out or your session expires they will be lost. Remember to confirm your bookings!');
define('_JOMRES_CART_CONFIRM_BOOKINGS','Confirm booking(s)');
define('_JOMRES_CART_OR',' or ');
define('_JOMRES_CART_SAVEFORLATER','Save for later');
define('_JOMRES_CART_NOBOOKINGS_SAVED','You don\'t have any bookings saved yet.');
define('_JOMRES_CART_VIEWCART','View cart');

define('_JOMRES_PROPERTYSPECIFIC_LANGUAGESUBDIR','Language file subdirectory');

define('_JOMRES_DEFAULT_LAT_STARTPOINT','Default Latitude Startpoint');
define('_JOMRES_DEFAULT_LONG_STARTPOINT','Default Longitude Startpoint');
define('_JOMRES_DEFAULT_LATLONGSTARTPOINT_DESC','In the Google map on the property edit page, before the marker has been moved, what should the default latitude/longitude start points be?');

define('_JOMRES_CLEARDATES','I don\'t have any dates yet');

define('_JOMRES_MOBILE_REDIRECT','Redirect to frameless when on mobile devices?');
define('_JOMRES_MOBILE_REDIRECT_DESC','Jomres includes a feature that redirects a user to a view of Joomla that does not include modules and headers when it detects that the browser belongs to a mobile device. If you have a Joomla template that is already optimised for mobile devices, you can disable this feature by setting this option to No.');

define('_JOMRES_SYSTEM_EMAILS','Emails sent from which address?');
define('_JOMRES_SYSTEM_EMAILS_DESC',"Leave this option blank to disable it. Jomres will use the hotel's email address(es) when sending emails to guests, however your email service MAY not allow emails from arbitrary addresses (i.e. they only may allow emails from one authorised address). If this is the case, then you can use this input to enter an address which will be seen as the FROM address for all system emails.");

define('_JOMRES_CSS_CACHING_TITLE',"Use css caching?");
define('_JOMRES_CSS_CACHING_DESC',"");


define('_JOMRES_JSCALENDAR_USECLEARCHECKBOX',"Search calendars show the clear dates checkbox?");

define('_JOMRES_PROPERTYLIST_LAYOUT_LIST',"List view");
define('_JOMRES_PROPERTYLIST_LAYOUT_TILE',"Photo view");

define('_JOMRES_COMPARE',"Compare");
define('_JOMRES_REMOVE',"Remove");
define('_JOMRES_RETURN_TO_RESULTS',"Return to search results");

define('_JOMRES_ADDTOSHORTLIST',"Add to shortlist");
define('_JOMRES_REMOVEFROMSHORTLIST',"Remove from shortlist");
define('_JOMRES_VIEWSHORTLIST',"View your shortlist");

define('_JOMRES_COOKIEPOLICY_TITLE',"Cookie Policy");
define('_JOMRES_COOKIEPOLICY_DESC',"EU Legislation requires that all websites that use cookies request permission from site visitors to store cookies.
<br/>
Jomres uses the host CMS's cookie to construct it's own session file where information about the user's search results and other activities can be saved, to make the user's visit more pleasant. Whilst we believe that normal Jomres functionality is probably covered by provisions in the legislation defined as <i>'such storage or access is strictly necessary to provide an information society service requested by the subscriber or user'</i> (see http://www.ico.gov.uk/for_organisations/privacy_and_electronic_communications/the_guide/cookies.aspx) we have included this feature to give you the ability to prevent users from accessing pages other than search pages in the event that the user does not allow their cookie to be used in this way. <br/>
If enabled Jomres will show an 'opt-in' link where users can choose to have the cookie which is stored for them used in this way. If they do not choose to opt-in then Jomres will only show them some basic pages (like the properties details, show shortlist, search results etc). 
<br/>
Set this option to Yes to enact this policy.");

define('_JOMRES_COOKIEPOLICY_1',"Important: Cookie Policy");
define('_JOMRES_COOKIEPOLICY_2',"We use cookies to help keep our site relevant and easy to use.");
define('_JOMRES_COOKIEPOLICY_3',"Read more...");
define('_JOMRES_COOKIEPOLICY_4',"EU legislation requires that all websites clearly specify if cookies are being used and their purpose.");
define('_JOMRES_COOKIEPOLICY_5',"The search and booking engine of this site needs to be able to remember the options you have chosen to work at it's best. To do this it needs to store information which is associated with a small file called a \"cookie\" which uniquely identifies your browser, and for us to do that, you must agree that we can. If you do not accept this cookie policy then you will be severely limited in what you can do on this site.");
define('_JOMRES_COOKIEPOLICY_6',"Yes, I accept the use of cookies in this way.");

define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST','Deposit required is cost of the first night?');
define('_JOMRES_COM_A_DEPOSIT_FIRSTNIGHTCOST_DESC','Prices are calculated on a per night basis. Do you want the deposit to be one night\'s charge? If so, you can ignore the following options.');

define('_JOMRES_NOTHINGINSHORTLIST',"You haven't added any items to your shortlist.");

define('_JOMRES_MOBILE_SETTINGS',"Mobile device settings");
define('_JOMRES_SIMULATE_MOBILE',"Simulate mobile mode");
define('_JOMRES_SIMULATE_MOBILE_DESC',"Set this to yes to force Jomres to always switch to mobile view. Useful if you're developing templates that are for mobile devices. NOTE : You will need a mobile template plugin installed.");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION',"Simulation IP");
define('_JOMRES_SIMULATE_MOBILE_RESTRICTION_DESC',"You can configure the simulation setting to only come into force if the user's IP = xxx.xxx.xxx.xxx, so for example if you're developing on localhost, you would set the IP number to 127.0.0.1.");
