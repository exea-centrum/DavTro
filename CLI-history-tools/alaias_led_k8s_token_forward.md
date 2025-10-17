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

Nadaj uprawnienia do wykonywania:

```bah
chmod +x ~/k8s_commands.sh
```

# Konfiguracja Aliasów

## Aby łatwo uruchamiać skrypty, skonfiguruj aliasy w pliku ~/.bashrc lub ~/.bash_aliases.

```bash
nano k8s_stop.sh
```

```bash
#!/bin/bash

# Zatrzymanie procesów port-forward dla Kubernetes Dashboard (port 10443)
echo "Zatrzymywanie port-forward dla Kubernetes Dashboard (10443)..."
pkill -f "port-forward.*kube-system.*10443:443"

# Zatrzymanie procesów port-forward dla ArgoCD (port 8080)
echo "Zatrzymywanie port-forward dla ArgoCD (8080)..."
pkill -f "port-forward.*argocd.*8080:443"

echo "Wszystkie procesy port-forward zostały zatrzymane."
```

Nadaj uprawnienia do wykonywania:

```bash
chmod +x ~/k8s_stop.sh
```

# Konfiguracja Aliasów

## Aby łatwo uruchamiać skrypty, skonfiguruj aliasy w pliku ~/.bashrc lub ~/.bash_aliases.

1. Otwórz plik:

```bash
nano ~/.bashrc
```

2. Dodaj aliasy:

```bash
alias xsetledon='~/k8s_commands.sh'
alias xsetledoff='~/k8s_stop.sh'
```

3. Odśwież konfigurację:

```bash
source ~/.bashrc
```

# Użycie

## Uruchomienie serwisów:

```bash
xsetledon
```

## Spodziewane rezultaty:

### Wyświetlenie nazwy tokenu z kube-system.

#### Szczegóły tokenu (kubectl describe).

#### Hasło ArgoCD (zdekodowane).

Uruchomienie port-forward dla portów 10443 (Kubernetes Dashboard) i 8080 (ArgoCD).

## Zatrzymanie serwisów:

```bash
xsetledoff
```

#### Spodziewane rezultaty:

#### Zatrzymanie procesów port-forward dla portów 10443 i 8080.
