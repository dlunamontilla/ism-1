transpilador = scss
parametros = -w -t expanded
ruta = recursos/asset/sass:vista/css

main:
	${transpilador} ${parametros} ${ruta}