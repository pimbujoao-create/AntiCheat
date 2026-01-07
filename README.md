# AntiCheat Android

Sistema de verificação de integridade para dispositivos Android via Termux.

## 📱 Requisitos
- Android
- Termux
- PHP
- Git

## 🚀 Como executar (Cliente)

Copie e cole no Termux:

```bash
pkg install git php android-tools procps -y && \
rm -rf AntiCheat && \
git clone https://github.com/SEUUSUARIO/AntiCheat.git && \
cd AntiCheat && \
bash run.sh
