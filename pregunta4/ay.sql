select *
from persona p, inscripcion i 
where p.ci=i.ci_estudiante

select p.departamento, AVG(i.notafinal) promedio
from persona p, inscripcion i 
where p.ci=i.ci_estudiante
group by p.departamento