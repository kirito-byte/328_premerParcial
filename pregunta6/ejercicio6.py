
import psycopg2 as pc

conexion = pc.connect(user="root",
                      password="",
                      host="localhost",
                      port="5432",
                      database="midatasamuel")
cursor = conexion.cursor()
sql="select avg(case when persona.departamento='01' then inscripcion.notafinal end) CH, avg(case when persona.departamento='02' then inscripcion.notafinal end) LP, avg(case when persona.departamento='03' then inscripcion.notafinal end) CB, avg(case when persona.departamento='04' then inscripcion.notafinal end) RU, avg(case when persona.departamento='05' then inscripcion.notafinal end) PT, avg(case when persona.departamento='06' then inscripcion.notafinal end) TA, avg(case when persona.departamento='07' then inscripcion.notafinal end) SC, avg(case when persona.departamento='08' then inscripcion.notafinal end) BE, avg(case when persona.departamento='09' then inscripcion.notafinal end ) PD from persona, inscripcion where persona.ci=inscripcion.ci_estudiante"
cursor.execute(sql)
registros = cursor.fetchall()
print(registros)
for registro in registros:
    print("CH","   LP","   Cb","  Ru","  Pt","  Ta","  Sc","   Be","   PD") 
    print(round(registro[0],2),round(registro[1],2),round(registro[2],2),round(registro[3],2),round(registro[4],2),round(registro[5],2),round(registro[6],2),round(registro[7],2),round(registro[8],2))
cursor.close()
conexion.close()
