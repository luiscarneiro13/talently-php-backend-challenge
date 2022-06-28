# Talently Challenge

    De antemano muchas gracias por permitirme realizar este reto

1. Qué paquete o estrategia utilizarías para levantar un sistema de administración rápidamente? (Autenticación y CRUDs)
    
    **R= CRUDBooster**. Utilizaría CRUDBooster porque me permite crear un sistema admin con roles, permisos y protección de rutas    además de poder crear endpoints de forma visual muy rápido. También se pueden crear módulos con validación de datos, vistas y controladores muy fácil

2. Una breve explicación de cómo laravel utiliza la injección de dependencias

    **R=**. Laravel utiliza un contenedor, el cual se encarga de instaciar las dependencias inyectadas. Es un proceso automático para evitar que instanciemos clases manualmente. Generalmente se usa para instanciar clases desde su constructor

3. En qué casos utilizarías un Query Scope?

    **R=**. En el caso de necesitar restricciones por defecto en base a una consulta y evitar utilizar esa misma restricción cada vez que se necesite

4. Qué convenciones utilizas en la creación e implementación de migraciones?

    **R=**. accion_nombre_tabla_table