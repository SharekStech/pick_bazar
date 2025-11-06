1) Doctor Schedules table migration: api\database\migrations\2025_11_03_080249_create_doctor_schedules_table.php
Fields:
- id
- doctor_id (foreign key)
- hospital_id (foreign key)
- day_of_week (array of enum: sunday,monday,tuesday,wednesday,thursday,friday,saturday)
- start_time (time)
- end_time (time)
- status (active/inactive)

Requirements for DoctorSchedule:
- doctor_id + hospital_id + start_time + end_time should be **unique**
- A doctor can insert **multiple days** in one schedule
- **Validation rule**:
    - Same doctor **cannot have overlapping time on same day in same hospital**
    - Same doctor **can work in different hospitals at the same time**
- Schedule CRUD should allow:
    - Create, update, delete, list
    - Pagination for listing
    - JSON response like: ['success'=>true, 'message'=>'...', 'data'=>...]

2) DoctorScheduleSeeder: api\database\seeders\DoctorScheduleSeeder.php
- Seed multiple doctors with multiple schedules
- Each doctor should have schedules in multiple hospitals
- Make sure **no overlapping times in the same hospital** for the same doctor
- Use realistic sample data
3) Generate:
- Migration (with proper unique constraints)
- Model (DoctorSchedule) with relationships to Doctor and Hospital
- Controller with full CRUD, validation rules
- Routes (apiResource) in api\packages\marvel\src\Rest\Routes.php
- Seeder with sample schedules
- Responses in JSON format
- Validation for overlapping time per hospital per doctor
- Handle `day_of_week` as array
