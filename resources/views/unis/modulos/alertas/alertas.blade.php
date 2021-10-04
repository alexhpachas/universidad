<script>
    Livewire.on('create', function(mensaje){    
            Swal.fire({            
            type: 'success',
            title: 'Creado Correctamente',
            showConfirmButton: false,
            timer: 2000
        })
    })
    
    Livewire.on('validate', function(mensaje){    
            Swal.fire({            
            type: 'warning',
            title: 'El registro ya existe',
            showConfirmButton: false,
            timer: 2000
        })
    })

    Livewire.on('error', function(mensaje){    
            Swal.fire({            
            type: 'error',
            title: 'El registro ya existe',
            showConfirmButton: false,
            timer: 2000
        })
    })

    Livewire.on('update', function(mensaje){    
            Swal.fire({            
            type: 'success',
            title: 'Actualizado Correctamente',
            showConfirmButton: false,
            timer: 2000
        })
    })             
     
</script>