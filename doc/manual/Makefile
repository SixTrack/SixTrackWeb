all: six.pdf six.html


six.pdf: six.tex clean
	pdflatex six.tex
	pdflatex six.tex
	pdflatex six.tex

six.html: six.tex
	htlatex six.tex

clean:
	-rm six.tmp six.toc six.xref six.log six.lot six.out six.lg six.idv six.blg six.bbl six.aux

