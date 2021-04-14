<script>
    Livewire.on('create', function(mensaje){    
            Swal.fire({            
            type: 'success',
            title: 'Creado Correctamente',
            showConfirmButton: false,
            timer: 2000
        })
    })             
     
</script>