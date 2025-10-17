Instrukcje konfiguracji aliasów (xsetledon i xsetledoff).

Plik Markdown: k8s_commands.md
markdown# Skrypty Bash dla Microk8s: Uruchamianie i Zatrzymywanie Serwisów

Ten dokument opisuje dwa skrypty Bash do zarządzania serwisami Microk8s: jeden do uruchamiania poleceń `kubectl` (w tym `port-forward`) oraz drugi do zatrzymywania procesów `port-forward`. Skrypty są wywoływane za pomocą aliasów `xsetledon` i `xsetledoff`.

## Skrypt 1: Uruchamianie Serwisów (`xsetledon`)

Skrypt `k8s_commands.sh` wykonuje następujące operacje:

1. Sprawdza, czy Microk8s jest uruchomiony.
2. Pobiera i wyświetla nazwę tokenu (sekretu) z namespace `kube-system`.
3. Wyświetla szczegóły tokenu za pomocą `kubectl describe`.
4. Pobiera i dekoduje hasło ArgoCD z namespace `argocd`.
5. Uruchamia przekierowania portów dla Kubernetes Dashboard (`10443:443`) i ArgoCD (`8080:443`) w tle.

### Kod Skryptu: `k8s_commands.sh`

```bash
#!/bin/bash

# Włączenie diody LED
xset led on

# Sprawdzenie, czy microk8s jest uruchomiony
if ! microk8s status >/dev/null 2>&1; then
    echo "Błąd: Microk8s nie jest uruchomiony. Uruchom: microk8s start"
    exit 1
fi

# Pobranie nazwy tokenu (sekretu) z namespace kube-system
echo "Pobieranie nazwy tokenu z kube-system..."
token=$(microk8s kubectl -n kube-system get secret | grep 'dashboard-token' | awk '{print $1}')
if [ -z "$token" ]; then
    echo "Błąd: Nie znaleziono tokenu w kube-system (szukano 'dashboard-token')."
    exit 1
fi
echo "Znaleziono token: $token"

# Opisanie sekretu w namespace kube-system
echo "Opis sekreu dla tokenu: $token"
microk8s kubectl -n kube-system describe secret "$token"

# Pobranie i dekodowanie hasła ArgoCD
echo "Pobieranie hasła ArgoCD..."
microk8s kubectl get secret -n argocd argocd-initial-admin-secret -o jsonpath="{.data.password}" | base64 -d; echo

# Przekierowanie portów dla Kubernetes Dashboard
echo "Uruchamianie port-forward dla Kubernetes Dashboard (10443:443)..."
microk8s kubectl port-forward -n kube-system service/kubernetes-dashboard 10443:443 &

# Przekierowanie portów dla ArgoCD
echo "Uruchamianie port-forward dla ArgoCD (8080:443)..."
microk8s kubectl port-forward svc/argocd-server -n argocd 8080:443 &
Tworzenie i Uprawnienia
```

Utwórz plik skryptu:

```bash

bashnano ~/k8s_commands.sh

```

Wklej powyższy kod, zapisz i zamknij plik.
Nadaj uprawnienia do wykonywania:

```bash
bashchmod +x ~/k8s_commands.sh
```

Skrypt 2: Zatrzymywanie Serwisów (xsetledoff)
Skrypt k8s_stop.sh zatrzymuje procesy port-forward uruchomione przez pierwszy skrypt dla Kubernetes Dashboard (10443:443) i ArgoCD (8080:443).
Kod Skryptu: k8s_stop.sh

```bash

bash#!/bin/bash

```

# Zatrzymanie procesów port-forward dla Kubernetes Dashboard (port 10443)

echo "Zatrzymywanie port-forward dla Kubernetes Dashboard (10443)..."
pkill -f "port-forward.*kube-system.*10443:443"

# Zatrzymanie procesów port-forward dla ArgoCD (port 8080)

echo "Zatrzymywanie port-forward dla ArgoCD (8080)..."
pkill -f "port-forward.*argocd.*8080:443"

echo "Wszystkie procesy port-forward zostały zatrzymane."
Tworzenie i Uprawnienia

Utwórz plik skryptu:

```bash

bashnano ~/k8s_stop.sh

```

Wklej powyższy kod, zapisz i zamknij plik.
Nadaj uprawnienia do wykonywania:

```bash
bashchmod +x ~/k8s_stop.sh
```

Konfiguracja Aliasów
Aby łatwo uruchamiać skrypty, skonfiguruj aliasy w pliku ~/.bashrc lub ~/.bash_aliases.

Otwórz plik:

```bash

bashnano ~/.bashrc
```

Dodaj aliasy:

```bash
bashalias xsetledon='~/k8s_commands.sh'
alias xsetledoff='~/k8s_stop.sh'
```

Odśwież konfigurację:

```bash
bashsource ~/.bashrc
```

Użycie

Uruchomienie serwisów:

```bash
bashxsetledon
```

Spodziewane rezultaty:

Wyświetlenie nazwy tokenu z kube-system.
Szczegóły tokenu (kubectl describe).
Hasło ArgoCD (zdekodowane).
Uruchomienie port-forward dla portów 10443 (Kubernetes Dashboard) i 8080 (ArgoCD).

Zatrzymanie serwisów:

```bash
bashxsetledoff
```

Spodziewane rezultaty:

Zatrzymanie procesów port-forward dla portów 10443 i 8080.

Rozwiązywanie Problemów
Skrypt xsetledon

Microk8s nie działa:
Sprawdź status:
bashmicrok8s status
Uruchom, jeśli nieaktywny:
bashmicrok8s start

Brak tokenu:
Jeśli skrypt nie znajduje tokenu (dashboard-token), sprawdź dostępne sekrety:
bashmicrok8s kubectl -n kube-system get secret
Zaktualizuj skrypt, zmieniając grep 'dashboard-token' na odpowiedni filtr, np. grep 'nazwa-tokenu'.
Serwisy nie istnieją:
Sprawdź, czy serwisy istnieją:
bashmicrok8s kubectl -n kube-system get svc
microk8s kubectl -n argocd get svc

Zajęte porty:
Sprawdź, czy porty 10443 i 8080 są wolne:
bashnetstat -tuln | grep -E '10443|8080'

Skrypt xsetledoff

Procesy nie są zatrzymywane:
Sprawdź, czy procesy port-forward działają:
bashps aux | grep "kubectl port-forward"
Jeśli wzorce w pkill nie działają, uprość je, np.:
bashpkill -f "port-forward.*10443"
pkill -f "port-forward.*8080"

Brak aliasu:
Sprawdź, czy alias jest zdefiniowany:
bashalias | grep xsetledoff

Uwagi

Jeśli token w kube-system ma inną nazwę niż dashboard-token, dostosuj filtr w skrypcie k8s_commands.sh.
Komendy port-forward są uruchamiane w tle (&). Aby uruchamiać je w foreground, usuń & z kodu.
Skrypty zakładają, że Microk8s jest poprawnie skonfigurowany, a namespace’y kube-system i argocd istnieją.

Jeśli masz dodatkowe pytania lub potrzebujesz modyfikacji, skontaktuj się z administratorem!
text### Krok 1: Zapisanie pliku Markdown

1. Skopiuj powyższą treść.
2. Utwórz plik, np. `k8s_commands.md`:
   ```bash
   nano k8s_commands.md
   ```

Wklej treść, zapisz i zamknij plik.

Krok 2: Weryfikacja

Otwórz plik k8s_commands.md w edytorze Markdown lub przeglądarce (np. GitHub, VS Code, czy przeglądarka z wtyczką Markdown), aby upewnić się, że formatowanie jest poprawne.
Plik zawiera pełne instrukcje, kod skryptów, kroki konfiguracji i sekcję rozwiązywania problemów.

Krok 3: Utworzenie skryptów i aliasów
Jeśli jeszcze nie utworzyłeś skryptów i aliasów, postępuj zgodnie z instrukcjami w sekcji "Tworzenie i Uprawnienia" oraz "Konfiguracja Aliasów" w pliku Markdown.
Dodatkowe uwagi

Dostosowanie tokenu: Jeśli token w kube-system ma inną nazwę niż dashboard-token, zmodyfikuj linię w k8s_commands.sh:
bashtoken=$(microk8s kubectl -n kube-system get secret | grep 'nazwa-tokenu' | awk '{print $1}')
Zastąp 'nazwa-tokenu' odpowiednim filtrem.
Inne porty lub serwisy: Jeśli używasz innych portów lub serwisów, mogę zaktualizować skrypty i plik Markdown.
Problemy z poprzednim skryptem: Jeśli masz konkretne błędy z xsetledon lub xsetledoff, podaj je, a zaktualizuję plik Markdown i skrypty.

Daj znać, jeśli potrzebujesz zmian w pliku Markdown (np. krótszej wersji, innego formatowania) lub dalszej pomocy z implementacją!

```

```
