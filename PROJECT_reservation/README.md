# Cinema Reservation System 

Prosty system zarządzenia rezerwacjami kinowymi napisany w PHP z użyciem PDO oraz bazy danych MySQL.

## Funkcje projektu:
- Autoryzacja użytkowników w oparciu o mechanizm sesji.
- Bezpieczne dodawanie nowych filmów, sal kinowych oraz rezerwacji (zabezpieczenie przed SQL Injection dzięki Prepared Statements).
- Relacyjna baza danych (powiązanie rezerwacji z konkretnym filmem i salą za pomocą kluczy obcych).
- Przegląd aktualnego repertuaru i dodanych filmów.

## Struktura Bazy Danych:
Projekt wykorzystuje 4 tabele: `User` (użytkownicy), `Film` (baza filmów), `Sala` (sale kinowe) oraz `Rezerwacja` (powiązania rezerwacji z datą i godziną).