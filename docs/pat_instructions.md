# Instructions pour créer un Personal Access Token (PAT)

1. Aller sur GitHub → Settings → Developer settings → Personal Access Tokens → Tokens (classic)
2. Cliquer sur "Generate new token"
3. Nommer le token (ex: football-analysis-token) et choisir sa durée de validité
4. Sélectionner les scopes nécessaires:
   - repo : accès complet aux dépôts
   - workflow : (optionnel) pour GitHub Actions
   - read:org : (optionnel) pour accès organisation
5. Copier le token et le stocker en sécurité
6. Ne jamais committer le token dans le dépôt
