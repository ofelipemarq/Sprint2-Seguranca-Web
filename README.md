# Sprint 2 — Segurança Web: SQL Injection, XSS e CSRF

Repositório de evidências e trechos de código da Sprint 2 do Módulo 3 (Segurança Web — 2026/2), Bacharelado em Cibersegurança, Faculdade de Engenharia Elétrica — UFU.

- **Dupla:** Felipe Marques e Lucas Zambotti
- **Ambiente:** VM SEED Ubuntu 20.04, Docker / Docker Compose, Firefox 83.0
- **Pacotes SEED Labs:** `Web_SQL_Injection`, `Web_XSS_Elgg` e `Web_CSRF_Elgg`

## Organização das pastas

As pastas seguem a mesma ordem das seções do relatório:

- `00_ambiente/` — capturas de preparação do ambiente, versões, rotas e interfaces (`E0.1`).
- `01_wireshark/` — capturas de tráfego HTTP do SQL Injection e do Elgg/XSS (`E1.1` a `E1.3`).
- `02_sql_injection/` — evidências da exploração, retestes e encerramento (`E2.1` a `E2.6`, `S6.4`), além dos trechos PHP e diffs com consultas parametrizadas.
- `03_xss/` — evidências do marcador XSS, Network/Inspector, atributos de cookie e experimentos de CSP (`E3.1` a `E3.6`), junto com o ajuste e diff do `apache_csp.conf`.
- `04_csrf/` — evidências das requisições legítimas, CSRF via GET/POST, reativação da validação de token, experimento SameSite e encerramento (`E4.1` a `E4.5`, `S6.4`), além dos HTMLs auxiliares, `Csrf.trecho.php` e `Csrf.diff`.

## Escopo e sanitização

Executamos todos os testes apenas na rede Docker isolada da VM SEED local, usando somente as contas fictícias e domínios internos do pacote. Nenhuma captura bruta (`.pcap`/`.pcapng`) foi incluída no repositório, e todos os valores de senhas, cookies, tokens anti-CSRF (`__elgg_ts`, `__elgg_token`) e identificadores de sessão/GUID foram ocultados nas imagens e nos arquivos de código. Ao final dos testes, restauramos os arquivos alterados e encerramos todos os contêineres.
