# per-web-project
Personal Website  project
# Translation Commands
To regenerate the template, execute:
```cd public_html
find . -iname "*.php" | xargs xgettext --from-code=UTF-8 --default-domain=tianguis```
After the template has been translated or updated, execute:
```cd public_html/locale/es_MX/LC_MESSAGES
msgfmt tianguis.po -o tianguis.mo```