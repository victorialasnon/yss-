# pour lancer la ligne de commande dans le container devilbox
cd ~/devilbox
sudo ./shell.sh

# verifier que sass est présent
sass --version

# Watch stylesheets and recompile when they change
sass --watch htdocs/src/nom.scss nom.css