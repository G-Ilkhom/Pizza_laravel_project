<?php

namespace App\Http\Controllers\Swagger;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Http\Requests\Post\UpdateRequest;
use App\Http\Resources\Post\PostResource;
use App\Models\Post;
use Illuminate\Http\Request;

/**
 *
 * @OA\Post(
 *      path="/api/posts",
 *      summary="Создание",
 *      tags={"Post"},
 *      security={{ "bearerAuth": {} }},
 *      @OA\RequestBody(
 *          @OA\JsonContent(
 *              allOf={
 *                  @OA\Schema(
 *                      @OA\Property(property="name", type="string", example="some name"),
 *                      @OA\Property(property="composition", type="string", example="some composition"),
 *                      @OA\Property(property="calories", type="integer", example="200"),
 *
 *                  )
 *              }
 *          )
 *      ),
 *
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="object",
 *                  @OA\Property(property="id", type="integer", example=1),
 *                  @OA\Property(property="name", type="string", example="some name"),
 *                  @OA\Property(property="category_id", type="integer", example=1),
 *                  @OA\Property(property="composition", type="string", example="some composition"),
 *                  @OA\Property(property="calories", type="integer", example=200),
 *              ),
 *          ),
 *      ),
 *  ),
 *
 *
 * @OA\Get(
 *      path="/api/posts",
 *      summary="Список",
 *      tags={"Post"},
 *      security={{ "bearerAuth": {} }},
 *
 *      @OA\Response(
 *          response=200,
 *          description="Ok",
 *          @OA\JsonContent(
 *              @OA\Property(property="data", type="array", @OA\Items(
 *                   @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="name", type="string", example="some name"),
 *                   @OA\Property(property="category_id", type="integer", example=1),
 *                   @OA\Property(property="composition", type="string", example="some composition"),
 *                   @OA\Property(property="calories", type="integer", example=200),
 *              )),
 *          ),
 *      ),
 *  ),
 *
 * @OA\Get(
 *       path="/api/posts/{post}",
 *       summary="Единичнная запись",
 *       tags={"Post"},
 *       security={{ "bearerAuth": {} }},
 *
 *       @OA\Parameter(
 *           description="ID заказа",
 *           in="path",
 *           name="post",
 *           required=true,
 *           example=1
 *       ),
 *       @OA\Response(
 *           response=200,
 *           description="Ok",
 *           @OA\JsonContent(
 *               @OA\Property(property="data", type="object",
 *                   @OA\Property(property="id", type="integer", example=1),
 *                   @OA\Property(property="name", type="string", example="some name"),
 *                   @OA\Property(property="category_id", type="integer", example=1),
 *                   @OA\Property(property="composition", type="string", example="some composition"),
 *                   @OA\Property(property="calories", type="integer", example=200),
 *               ),
 *           ),
 *       ),
 *   ),
 *
 * @OA\Patch(
 *        path="/api/posts/{post}",
 *        summary="Обновление",
 *        tags={"Post"},
 *        security={{ "bearerAuth": {} }},
 *        @OA\Parameter(
 *            description="ID заказа",
 *            in="path",
 *            name="post",
 *            required=true,
 *            example=2
 *        ),
 *
 *        @OA\RequestBody(
 *           @OA\JsonContent(
 *               allOf={
 *                   @OA\Schema(
 *                       @OA\Property(property="name", type="string", example="some name for edit"),
 *                       @OA\Property(property="composition", type="string", example="some composition for edit"),
 *                       @OA\Property(property="calories", type="integer", example="201"),
 *
 *                   )
 *               }
 *           )
 *       ),
 *
 *        @OA\Response(
 *            response=200,
 *            description="Ok",
 *            @OA\JsonContent(
 *                @OA\Property(property="data", type="object",
 *                    @OA\Property(property="id", type="integer", example=1),
 *                    @OA\Property(property="name", type="string", example="some name"),
 *                    @OA\Property(property="category_id", type="integer", example=1),
 *                    @OA\Property(property="composition", type="string", example="some composition"),
 *                    @OA\Property(property="calories", type="integer", example=200),
 *                ),
 *            ),
 *        ),
 *    ),
 *
 * @OA\Delete(
 *        path="/api/posts/{post}",
 *        summary="Удаление",
 *        tags={"Post"},
 *        security={{ "bearerAuth": {} }},
 *        @OA\Parameter(
 *            description="ID заказа",
 *            in="path",
 *            name="post",
 *            required=true,
 *            example=1
 *        ),
 *        @OA\Response(
 *            response=200,
 *            description="Ok",
 *            @OA\JsonContent(
 *                @OA\Property(property="message", type="string", example="done"),
 *            ),
 *        ),
 *    ),
 */
class PostController extends Controller
{

}
