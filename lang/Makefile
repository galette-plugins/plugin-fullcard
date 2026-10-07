INSTALLDIR = .
LANGUAGES = `find ./ -name "fullcard_*.po" -print | sed 's|^\./fullcard_\(.*\).po|\1|'`
DOMAINS = fullcard
PHP_SOURCES = $(sort $(shell find ../ -maxdepth 1 -name \*.php)) \
              $(sort $(shell find ../lib/GaletteFullcard/ -name \*.php)) \
              $(sort $(shell find ../templates -name \*.tpl))


all : extract mo

po :
	@echo "Generating PO files:"
	@for l in ${LANGUAGES}; do \
	  for d in ${DOMAINS}; do \
	    if [ -f $${d}_$${l}.po ]; then \
	      echo -n "  Updating $${d}_$${l}.po"; \
	      msgmerge -U $${d}_$${l}.po $$d.pot >/dev/null ; \
	    else \
	      echo "  Creating of $${d}_$${l}.po"; \
	      msginit -o $${d}_$${l}.po -i $$d.pot >/dev/null ; \
	    fi; \
	  done \
	done

mo :
	cd ../../../../ && bin/console galette:compile-locales plugin-fullcard

extract : ${PHP_SOURCES} Makefile
	xgettext ${PHP_SOURCES} --keyword=_T:1,2t --keyword=__:1,2t --keyword=_Tn:1,2,4t --keyword=_Tx:1c,2,3t --keyword=_Tnx:1c,2,3,5t -L PHP --from-code=UTF-8 --add-comments=TRANS --force-po -o fullcard.pot;
	echo "Generating en_US:"
	@for d in ${DOMAINS}; do \
	  LANG=C msgen $$d.pot | msgconv -t UTF-8 -o $${d}_en_US.po; \
	done
