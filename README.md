## Założenia: 

- Darmowy, w pełni personalizowany serwis z memami/gagami
- Łatwy i czytelny (dla użytkowników) 
- Posiadający system szablonów umożliwiający szybką edycję wyglądu. 
- Oparty na Laravel. 
- Implementujący system oparty na wskaznikach (Balanced scorecard) 
  - https://pl.wikipedia.org/wiki/Kluczowe_wska%C5%BAniki_efektywno%C5%9Bci 
  - https://pl.wikipedia.org/wiki/Zr%C3%B3wnowa%C5%BCona_karta_wynik%C3%B3w 

## Grafika
![Opera Zrzut ekranu_2021-01-28_153137_jp2jmd pl](https://user-images.githubusercontent.com/6086510/106153096-76b0bd80-617e-11eb-9eed-8d4882a02a4c.png)
![Opera Zrzut ekranu_2021-01-28_153257_jp2jmd pl](https://user-images.githubusercontent.com/6086510/106153273-a790f280-617e-11eb-8bf0-8046681d73cc.png)

![Opera Zrzut ekranu_2021-01-28_153402_jp2jmd pl](https://user-images.githubusercontent.com/6086510/106153113-7ca69e80-617e-11eb-8dde-93d7d2226e36.png)


## Wygląd: 

- Czarno-biała kolorystyka (flat) na bootstrap'ie 4. 
- Lazyloading tam gdzie tylko to możlwe. 
- Oparty na szablonie:  
  - https://www.templateku.com/ 
  - https://9gag.com/ 



## Logowanie: 

- Logowanie musi być poprzedzone aktywacją konta poprzez email. 
- Do logowania używany jest login i hasło (email jest niewidoczny dla pozostałych użytkowników) 
- Logowanie musi być zabezpieczone recaptchą której klucze znajdują się w ustawieniach serwisu. 

## Rejestracja: 

- Po rejestracji zostaje wysłany link aktywacyjny na email użytkownika. 
- Login filtrowany tak aby było wszystko z małych liter.  
- Hasło minimum 6 lub 8 znaków. 
- Rejestracja musi być zabezpieczona recaptchą której klucze znajdują się w ustawieniach serwisu. 

 
# Posty: 

## Rodzaje: 

- Post z samą grafiką lub/i z tekstem. 
- Post z filmikiem lub/i z tekstem. (*) 
- Post z samym tekstem. 

## Akcje dostępne przy postach: 

- Like/Dislike Posta 
- Zgłoszenie posta 
- Dodanie komentarza z możliwością (cytowania, Like/Dislike, zgłoszenia) 
- Dla administratora/ moderatora: 
  - Usunięcie/ Modyfikacja postu. 
  - Widok statystyk 
  - Przeniesienie na "główną" 


## Dostępne statystyki: 

- Dzienne: 
  - Ilość wyświetleń posta (wykres) 
  - Ilość polubień posta (wykres) 
  - Ilość udostępnień posta (wykres) 

- Od początku: 
  - Ilość wyświetleń posta (wykres) 
  - Ilość polubień posta (wykres) 
  - Ilość udostępnień posta (wykres) 

 

## Dodawanie posta: 
Dodawanie posta musi być zabezpieczone recaptchą której klucze znajdują się w ustawieniach serwisu. 

- Pola: 
  - Tytuł 
  - Tekst 
  - Obrazek lub Wideo 
  - Kategoria 
  
## Komentarze: 
<p>Cytowanie komentarza jak i cytowanie posta. </p>
<p>Dodawanie komentarza musi być zabezpieczone recaptchą której klucze znajdują się w ustawieniach serwisu. </p>

  - Możliwość dodania komentarza z filmem lub gifem. 
  - Maksymalna długość komentarza 250 znaków (Do ustalenia w panelu administratora) 
  - Akcje dostępne przy postach: 
  - Likowanie/Dislikowanie. 
  - Zgłaszanie. 



# Panel administratora: 


## Logowanie: 

- Współdzielone z logowaniem strony głównej (odnosnik w headerze). 

## Zarządzanie: 

- Serwis: 
  - Facebook i media społecznościowe. 
  - Nazwa strony, opis, logo etc. 
  - Auto Update.  
  - Cenzura ON/OFF. 
  - Automatyczne przenoszenie na stronę główną po przekroczeniu ilości lików. 
  - Edycja regulaminu strony. 
  - Wskaźniki 

- Użytkownicy: 
  - Lista użytkowników wraz z szybką edycją. 
  - Lista grup wraz z szybką edycją. 
  - Lista permisji.  
- Posty: 
  - Lista postów wraz z szybką edycją (Autor, kategoria, typ)  
  - Lista komentarzy wraz z szybką edycją. 
  - Obsługa zgłoszeń postów/ komentarzy. 
- Pluginy (System dodatków): 
  - Należy sobie zadać pytanie czy to ma sens. Laravel jest otwartym frameworkiem... Nie będziemy prowadzić sklepu z dodatkami choć to było by całkiem ciekawe. 
- Statystyki (System Monitorowania): 
  - Strona główna: 
    - Wskaźniki: 
        - (Wskaźniki można ustawić w ustawieniach serwisu.) 
        - Ilość wejść dziennie. 
        - Ilość nowych użytkowników dziennie. 
        - Ilość osób zalogowanych dziennie. 
  - Serwis: 
    - Ilość odwiedzin dziennie (zalogowani/ nie zalogowani). 
  - Użytkownicy: 
    - Ilość zalogowanych użytkowników. 
    - Ilość zarejestrowanych użytkowników. 
  - Posty: 
    - Ilość wstawionych postów. 
    - Ilość udostępnionych postów. 
    - Ilość postów które dostały się na główną. 
    - Ilość napisanych komentarzy. 
  - Działania administracji 
    - Ilość zmodyfikowanych postów. 
    - Ilość usuniętych postów. 
    - Ilość zmodyfikowanych komentarzy. 
    - Ilość usuniętych komentarzy. 
    - Ilość zablokowanych użytkowników. 
    - Ilość usuniętych użytkowników. 

  

 

 

 

 

 

 

 

 

 
