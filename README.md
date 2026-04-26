# 📋 TaskFlow — Gestor de Tareas

Sistema CRUD de gestión de tareas construido con PHP, MySQL y Docker, siguiendo un flujo de trabajo profesional con Git Flow, Issues y Pull Requests.

![PHP](https://img.shields.io/badge/PHP-8.1-777BB4?style=flat&logo=php&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-8.0-4479A1?style=flat&logo=mysql&logoColor=white)
![Docker](https://img.shields.io/badge/Docker-Compose-2496ED?style=flat&logo=docker&logoColor=white)

## 🚀 Funcionalidades

- Crear, leer, actualizar y eliminar tareas
- Estados: Pendiente, En Progreso, Completada
- API REST con PHP puro
- Interfaz dark mode moderna y responsive
- Estadísticas en tiempo real

## 🛠️ Stack Tecnológico

| Capa | Tecnología |
|------|-----------|
| Frontend | HTML5, CSS3, JavaScript |
| Backend | PHP 8.1 |
| Base de datos | MySQL 8.0 |
| Contenedores | Docker + Docker Compose |
| Control de versiones | Git + GitHub |

## ⚡ Instalación y uso

### Requisitos
- Docker Desktop instalado y corriendo

### Pasos

1. Clona el repositorio
```bash
   git clone https://github.com/Gerxd69/task-manager-crud.git
   cd task-manager-crud
```

2. Levanta los contenedores
```bash
   docker-compose up -d
```

3. Crea la base de datos
```bash
   Get-Content src/config/schema.sql | docker exec -i task-manager-crud-db-1 mysql -u admin -padmin123 task_manager
```

4. Abre en el navegador