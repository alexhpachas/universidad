<script>
    Livewire.on('create', function(mensaje){    
            Swal.fire({            
            type: 'success',
            title: 'Creado Correctamente',
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