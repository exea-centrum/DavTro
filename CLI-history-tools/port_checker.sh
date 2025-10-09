#!/bin/bash

# Użycie nowoczesnego polecenia 'ss' (Socket Statistics)
# -l: Nasłuchujące gniazda (Listening sockets)
# -n: Numeryczne adresy i porty (bez rozwiązywania nazw)
# -p: Pokaż PID i nazwę programu (Processes)
# -t: TCP
# -u: UDP
# -H: Nie pokazuj nagłówka
# -e: Pokaż dodatkowe informacje (UID/GID)

echo "################################################################"
echo "# AKTYWNE PORTY NASŁUCHU NA SYSTEMIE LINUX (ss -lntupe)"
echo "################################################################"
echo

# Nagłówek dla przejrzystości
printf "%-7s %-25s %-8s %-15s\n" "PROTO" "ADRES:PORT" "PID" "PROGRAM/SERWIS"
printf "%s\n" "----------------------------------------------------------------"

# Właściwe polecenie i przetwarzanie
ss -lntupeH | awk '
{
    # $1 to Protokół (tcp/udp)
    PROTO = toupper($1)

    # $5 to Adres i Port nasłuchu
    LISTEN_ADDR_PORT = $5

    # $NF (ostatnie pole) zawiera info o procesie w formacie "users:(("program",pid=PID,fd=...))"
    # Szukamy PID i nazwy programu za pomocą regex w awk
    
    # Znajdź nazwę programu (między "a(" a ",pid=")
    match($NF, /"([^"]+)",pid=([0-9]+)/, arr)
    
    PROGRAM_NAME = arr[1]
    PID = arr[2]

    # Jeśli nie znaleziono, użyjemy domyślnych wartości
    if (PROGRAM_NAME == "") {
        # Jeśli program to [sshd], uzyjemy go
        if ($1 == "tcp" && LISTEN_ADDR_PORT ~ /:22$/) {
            PROGRAM_NAME = "sshd"
        } else {
            PROGRAM_NAME = "N/A"
        }
    }
    if (PID == "") {
        PID = "N/A"
    }

    # Drukowanie sformatowanej linii
    printf "%-7s %-25s %-8s %-15s\n", PROTO, LISTEN_ADDR_PORT, PID, PROGRAM_NAME
}
'

echo
echo "----------------------------------------------------------------"
echo "Uwaga: Proces 'ss' musi mieć odpowiednie uprawnienia (np. sudo) aby zobaczyć wszystkie dane, w tym PID."
