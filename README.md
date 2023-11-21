# garage
# Garage V. Parrot

Ce projet est une application web pour un garage automobile.

## Exécution en local

1. **Cloner le repository :**
    ```bash
    git clone https://github.com/votre-utilisateur/votre-projet.git
    ```

2. **Installer les dépendances :**
    ```bash
    cd votre-projet
    npm install
    ```

3. **Configurer la base de données :**
    - Assurez-vous que votre serveur de base de données est en cours d'exécution.
    - Copiez le fichier `.env.example` en `.env` et configurez les paramètres de la base de données.

4. **Exécuter l'application :**
    ```bash
    npm start
    ```

5. **Accéder à l'application :**
    Ouvrez votre navigateur et allez à [http://localhost:3000](http://localhost:3000).

## Création d'un administrateur pour le back-office

1. **Accédez à la console du projet :**
    ```bash
    cd votre-projet
    ```

2. **Exécutez la commande pour créer un administrateur :**
    ```bash
    npm run create-admin
    ```
    Cette commande vous guidera pour créer un compte administrateur avec les informations nécessaires.

3. **Connectez-vous au back-office :**
    Accédez à [http://localhost:3000/admin](http://localhost:3000/admin) et utilisez les informations d'identification que vous avez créées.

## Environnement de développement avec Visual Studio Code

1. **Ouvrir le projet avec VSCode :**
    ```bash
    code votre-projet
    ```

2. **Installer les extensions recommandées :**
    - [ESLint](https://marketplace.visualstudio.com/items?itemName=dbaeumer.vscode-eslint)
    - [Prettier](https://marketplace.visualstudio.com/items?itemName=esbenp.prettier-vscode)

3. **Développez et contribuez :**
    - Assurez-vous de suivre les bonnes pratiques de développement.
    - Avant de valider vos changements, assurez-vous de les formater avec Prettier.
    - Lintez votre code avec ESLint pour maintenir la cohérence.

