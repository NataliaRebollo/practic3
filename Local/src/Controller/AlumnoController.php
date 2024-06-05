<?php

namespace App\Controller;

use App\Entity\Alumno;
use App\Entity\Persona;
use App\Form\AlumnoType;
use App\Form\PersonaType;
use App\Repository\AlumnoRepository;
use App\Repository\PersonaRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/alumno')]
class AlumnoController extends AbstractController
{
    #[Route('/', name: 'app_alumno_index', methods: ['GET'])]
    public function index(AlumnoRepository $alumnoRepository): Response
    {
        return $this->render('alumno/index.html.twig', [
            'alumnos' => $alumnoRepository->findAll(),
        ]);
    }

    #[Route('/new', name: 'app_alumno_new', methods: ['GET', 'POST'])]
    public function new(Request $request, AlumnoRepository $alumnoRepository): Response
    {
        $alumno = new Alumno();
        $form = $this->createForm(AlumnoType::class, $alumno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $alumnoRepository->save($alumno, true);

            return $this->redirectToRoute('app_alumno_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('alumno/new.html.twig', [
            'alumno' => $alumno,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_alumno_show', methods: ['GET'])]
    public function show(Alumno $alumno): Response
    {
        return $this->render('alumno/show.html.twig', [
            'alumno' => $alumno,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_alumno_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, Alumno $alumno, AlumnoRepository $alumnoRepository): Response
    {
        $form = $this->createForm(AlumnoType::class, $alumno);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $alumnoRepository->save($alumno, true);

            return $this->redirectToRoute('app_alumno_index', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('alumno/edit.html.twig', [
            'alumno' => $alumno,
            'form' => $form,
        ]);
    }

    #[Route('/{id}', name: 'app_alumno_delete', methods: ['POST'])]
    public function delete(Request $request, Alumno $alumno, AlumnoRepository $alumnoRepository): Response
    {
        if ($this->isCsrfTokenValid('delete'.$alumno->getId(), $request->request->get('_token'))) {
            $alumnoRepository->remove($alumno, true);
        }

        return $this->redirectToRoute('app_alumno_index', [], Response::HTTP_SEE_OTHER);
    }

    public function search_alumnos(Request $request,AlumnoRepository $alumnoRepository,PersonaRepository $personaRepository):Response{
        $dni = $request->query->get('dni');        
        $persona = $personaRepository->findBy(['dni_pasaporte' => $dni]);

        return $this->render('alumno/index.html.twig', [
            'persona' => $persona,
            'alumnos' => $alumnoRepository->findBy(['persona' => $persona]),
        ]);

    }

    public function add_alumno_persona(Request $request, PersonaRepository $personaRepository): Response {
        $persona = new Persona();
        $form = $this->createForm(PersonaType::class, $persona);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $personaRepository->save($persona, true);
            return $this->redirectToRoute('app_alumno_new', [], Response::HTTP_SEE_OTHER);
        }

        return $this->renderForm('persona/new.html.twig', [
            'persona' => $persona,
            'form' => $form,
        ]);
    }
}
