#!/bin/bash

# Użycie starszego, ale często bardziej niezawodnego netstat.
# UWAGA: Wymaga instalacji pakietu 'net-tools' i uruchomienia z 'sudo'.
# -l: Nasłuchujące gniazda (Listening sockets)
# -n: Numeryczne adresy i porty
# -t: TCP
# -u: UDP
# -p: Pokaż PID/Program (Musi być uruchomione z sudo)

echo "################################################################"
echo "# AKTYWNE PORTY NASŁUCHU NA SYSTEMIE LINUX (netstat -lntup)"
echo "################################################################"
echo

# Sprawdzenie, czy netstat jest zainstalowany
if ! command -v netstat &> /dev/null
then
    echo "Błąd: Narzędzie 'netstat' nie zostało znalezione."
    echo "Proszę zainstalować pakiet 'net-tools' (np. 'sudo apt install net-tools' lub 'sudo yum install net-tools')."
    exit 1
fi

# Nagłówek dla przejrzystości
printf "%-7s %-25s %-8s %-15s\n" "PROTO" "ADRES:PORT" "PID" "PROGRAM/SERWIS"
printf "%s\n" "----------------------------------------------------------------"

# Właściwe polecenie i przetwarzanie
# Używamy grep -v do usunięcia nagłówka i pustych linii, a awk do formatowania.
sudo netstat -lntup 2>/dev/null | grep -v 'Proto' | awk '
{
    # $1: Protokół (tcp/udp)
    PROTO = toupper($1)

    # $4: Adres:Port nasłuchu (Local Address)
    LISTEN_ADDR_PORT = $4

    # $NF (Ostatnie pole) zawiera info o procesie w formacie "PID/PROGRAM"
    # Dzielimy to pole na PID i PROGRAM
    split($NF, proc_info, "/")

    PID = proc_info[1]
    PROGRAM_NAME = proc_info[2]
    
    # Jeśli pole jest puste (brak uprawnień/nieznany proces), ustawiamy N/A
    if (PID == "") {
        PID = "N/A"
        PROGRAM_NAME = "N/A"
    }

    # Drukowanie sformatowanej linii
    printf "%-7s %-25s %-8s %-15s\n", PROTO, LISTEN_ADDR_PORT, PID, PROGRAM_NAME
}
'

echo
echo "----------------------------------------------------------------"
echo "Uwaga: Uruchomienie skryptu z 'sudo' jest niezbędne do poprawnego wyświetlenia PID i Nazwy Programu."
