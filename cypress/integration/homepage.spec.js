/// <reference types="cypress" />


describe('Carga la pagina principal', () => {
    it('Prueba el header de la pagina principal', () => {
        cy.visit('/');
        cy.get('[data-cy="heading-sitio"]').should('exist');
        cy.get('[data-cy="heading-sitio"]').invoke('text').should('equal', ' Venta de casas y departamientos exclusivos de lujo ');
        cy.get('[data-cy="heading-sitio"]').invoke('text').should('not.equal', 'Bienes Raices');
    });
    it('Prueba el bloque de los iconos principales', () => {
        cy.visit('/');
        cy.get('[data-cy="heading-nosotros"]').should('exist');
        cy.get('[data-cy="heading-nosotros"]').should('have.prop', 'tagName').should('equal', 'H2');

        //Selecciona los iconos
        cy.get('[data-cy="iconos-nosotros"]').should('exist');
        cy.get('[data-cy="iconos-nosotros"]').find('.icono').should('have.length', 3);
        cy.get('[data-cy="iconos-nosotros"]').find('.icono').should('not.have.length', 4);
    });
    it('Prueba tener tres propiedades en el heading ', () => {
        //Debe haber tres propiedades
        cy.get('[data-cy="contenedor-anuncios"]').find('.anuncio').should('have.length', 3);
        cy.get('[data-cy="contenedor-anuncios"]').find('.anuncio').should('not.have.length', 4);

        //Probar en enlace de las propiedades
        cy.get('[data-cy="enlace-propiedad"]').should('exist');
        cy.get('[data-cy="enlace-propiedad"]').should('have.class', 'boton-amarillo-block');
        cy.get('[data-cy="enlace-propiedad"]').should('not.have.class', 'boton-amarillo');

        cy.get('[data-cy="enlace-propiedad"]').first().invoke('text').should('equal', 'Ver Propiedad');

        //Probar el enlace a una propiedad 
        cy.get('[data-cy="enlace-propiedad"]').first().click();
        cy.get('[data-cy="titulo-propiedad"]').should('exist');

        cy.wait(1000);
        cy.go('back');
    });
    it('Prueba el routing hacia todas las propiedades', () => {
        cy.get('[data-cy="ver-propiedades"]').should('exist');
        cy.get('[data-cy="ver-propiedades"]').should('have.class', 'boton-verde');
        cy.get('[data-cy="ver-propiedades"]').invoke('attr', 'href').should('equal', 'propiedades');

        cy.get('[data-cy="ver-propiedades"]').click();
        cy.get('[data-cy="heading-propiedades"]').invoke('text').should('equal', 'Casas y departamentos en venta');

        cy.wait(1000);
        cy.go('back');

    });
    it('Prueba el bloque de contacto', () => {
        cy.get('[data-cy="imagen-contacto"]').should('exist');
        cy.get('[data-cy="imagen-contacto"]').find('h2').invoke('text').should('equal', 'Encuentra la casa de tus sueños');
        cy.get('[data-cy="imagen-contacto"]').find('p').invoke('text').should('equal', 'Llena el formulario de contacto y un asesor se pondra en contacto contigo a la brevedad');
        cy.get('[data-cy="imagen-contacto"]').find('a').invoke('attr', 'href')
            .then(href => {
                cy.visit(href)
            });
        cy.get('[data-cy="heading-contacto"]').should('exist');
        cy.wait(1000);
        cy.visit('');
    });
});